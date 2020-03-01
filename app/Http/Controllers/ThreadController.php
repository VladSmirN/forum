<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThreadController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'image' => 'image|required|max:1999',
        ]);

        $thread = new Thread;
        $thread->image = Storage::putFile('public/images', $request->file('image'));
        $thread->title = $request->input('title');
        $thread->text = $request->input('text');
        $thread->save();

        return redirect('catalog');
    }
    public function create()
    {
        return view('thread/create');
    }
    public function catalog()
    {
        $threads = Thread::paginate(15);
        foreach($threads as $thread){
            $thread->image = Storage::url($thread->image);
        }
        return view('thread/catalog',compact('threads'));
    }
}
