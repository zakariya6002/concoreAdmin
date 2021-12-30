<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|unique:users', 
            'name' => 'required'
        ]);
        $data = new User();
        $data -> usertype = $request->usertype;
        $data -> name = $request->name;
        $data -> email = $request->email;
        $data -> roles = $request->roles;
        $data -> password = bcrypt($request->password);
        $data ->save();

        return redirect()->route('tutors.index');


        
    }
}
