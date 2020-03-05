<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'description' => 'nullable',
            'avatar' => 'image|nullable|max:1999',
        ]);

        $user = User::find(auth()->user()->id);

        if ($request->hasFile('avatar')) {
            $user->avatar = Storage::putFile('public/avatars', $request->file('avatar'));
        }

        $user->name = $request->input('name');
        $user->description = $request->input('description');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/profile');
    }
    public function show()
    {
        $userRepository = new UserRepository();
        $profile = $userRepository->getOwnProfile(auth()->user()->id);

        return view('profile/show', compact('profile'));
    }
    public function edit()
    {
        $userRepository = new UserRepository();
        $profile = $userRepository->getOwnProfile(auth()->user()->id);

        return view('profile/edit', compact('profile'));
    }
    public function showAlien($id)
    {
        $columns = ['description', 'avatar', 'name'];
        $profile = User::find($id, $columns);
        $profile->avatar = Storage::url($profile->avatar);

        return view('profile/showAlien', compact('profile'));
    }

}
