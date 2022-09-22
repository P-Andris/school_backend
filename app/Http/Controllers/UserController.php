<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = response()->json(User::all());
        return $users;
    }

    public function show($id) {
        $user = response()->json(User::find($id));
        return $user;
    }

    public function destroy($id) {
        User::find($id)->delete();
    }

    public function store(Request $request) {
        $user = new User();
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
    
    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
}
