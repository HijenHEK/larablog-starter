<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function edit(User $user) {
        return view('user.edit',compact('user'));
    }
    public function update(User $user) {
        Request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'passwrod' => 'required|string|confirmed',
            'role'=>'string|exists:roles,id'
        ]);

        $user->name = request('title');
        $user->email = request('body');
        $user->password = bcrypt(request('body'));
        $user->save();
        $role = Role::find(request('role'));
        $user->assignRole($role);


        return view('blog.dashboard',compact('users'));
    }
}
