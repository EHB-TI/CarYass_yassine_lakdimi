<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.panel', ['users' => $users]);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin-panel');
    }

    public function promote($id)
    {
        $user = User::find($id);
        $user->typeUser = 1; // Mettre l'utilisateur en tant qu'admin
        $user->save();
        return redirect()->route('admin-panel');
    }
}
