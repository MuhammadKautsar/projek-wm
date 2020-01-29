<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    //
    public function myProfile(){
    	$user = Auth::user();
    	return view('pages.profil')->with('user',$user);
    }
    public function myProfileUpdate(){
        $user=Auth::user();
        return view('pages.update-profil')->with('user', $user);
    }
    public function updateProfile(Request $request){
        if($user = User::find(Auth::id())){
            $user->name=$request->get('nama');
            $user->save();
            return view('pages.profil')->with('user',$user);
        }
        
    }
}
