<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request, $thread_id)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);

        $message = new Messages;
        if ($request->hasFile('image')) {
            $message->image = Storage::putFile('public/images', $request->file('image'));
        }
        $message->text = $request->input('text');
        $message->user_id = auth()->user()->id;
        $message->thread_id = $thread_id;
        $message->user_name = auth()->user()->name;
        $message->save();

        return redirect('thread/' . $thread_id);
    }
    public function create($thread_id)
    {
        return view('message/create', compact('thread_id'));
    }
}
