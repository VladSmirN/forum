<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Messages;
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
        $thread->user_id = auth()->user()->id;
        $thread->user_name = auth()->user()->name;
        $thread->save();

        return redirect('catalog');
    }
    public function create()
    {
        return view('thread/create');
    }
    public function catalog()
    {
        $threads = Thread::paginate(12);
        foreach($threads as $thread){
            $thread->image = Storage::url($thread->image);
        }
        return view('thread/catalog',compact('threads'));
    }
    public function show($id)
    {   
        $columns = ['text', 'user_name','user_id', 'image', 'title','id'];
        $thread = Thread::find($id,$columns);
        $thread->image = Storage::url($thread->image);
       
        $messages = Messages::where('thread_id',$thread->id)->paginate(300);
        foreach($messages as $message){
            $message->image = $message->image ? Storage::url($message->image) : false;
        }
        return view('thread/show',['thread'=>$thread,'messages'=>$messages]);
    }
}
