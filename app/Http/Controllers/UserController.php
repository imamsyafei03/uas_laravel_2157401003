<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index()  {
        $user = User::paginate(5);
        return view('user.index', compact('user'));

    }

    function create(){
        $user = new User;
        $roles= [
            'admin' =>'Admin',
            'operator' => 'Operator',
            'pengunjung' => 'Pengunjung'
        ];
        return view('user.create', compact('user','roles'));
    }
    function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('status', 'User berhasil dibuat');
    }

    function edit(User $user){
        $roles= [
            'admin' =>'Admin',
            'operator' => 'Operator',
            'pengunjung' => 'Pengunjung'
        ];
        return view('user.edit', compact('user', 'roles'));
    }
    function update(Request $request, User $user){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.index')->with('status', 'User berhasil di ubah');

    }

    function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')
        ->with('status','User berhasil dihapus');
    }
}


