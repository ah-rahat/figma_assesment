<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup($value='')
    {
       return view('signup');
    }
    public function userStore(Request $request)
    {
        $request->validate([
            'email'=>'required|unique:users'
        ]);
        $userStore=new User();
        $userStore->name=$request->name;
        $userStore->email=$request->email;
        $userStore->password=Hash::make($request->password);
        $userStore->save();
        return back()->with('usersave','User saved succesfully');
    }
    public function signin(Request $request)
    {
       $signinInfo=User::where('email',$request->email)->first();
       if ($signinInfo) {
        if (password_verify($request->password,$signinInfo->password)) {
            
            return 'okkk';
        }
        
        else{
            return back()->with('status','Invalid Password');
        }
       }
       else{
           return back()->with('status','Invalid Email');
       }
    }
}
