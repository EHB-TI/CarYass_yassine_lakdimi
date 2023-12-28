<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        return view('site.profile', ['user' => $user]);
    }
    public function edit()
    {
        $user = auth()->user();
        return view('site.profileEdit', ['user' => $user]);
    }
    public function update(Request $request)
    {
        $newAvatar=$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newAvatar);

        $user = auth()->user();
       $id=$user->id;
        $user= (new \App\Models\User)::where('id',$id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'birthday' => $request->input('birthday'),
            'about' => $request->input('about'),
            'image_path' => $newAvatar,

        ]);
        return response()->redirectToRoute('profile');
    }
}
