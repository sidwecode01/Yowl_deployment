<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index(){
        // check online users
        //  $user = Auth::user();
        // $lastActivity = $user->last_active_at;

        $allUser = User::all();
        $online = 'No';
        if(auth()->check()){
            $online = 'Yes';
        }

        
        return view('useDash', ['allUser'=>$allUser , 'online'=> $online]);
    }

    public function delete(User $use){
        $oneUse = User::find($use)->first();
        $oneUse->delete();
        return redirect('/Dash')->with('status' , 'Delete successfull');
    }

    public function indexDash(){
        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('Dashboard' , compact('users'));
    }


     public function indeDash(){
        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('dashboard' , compact('users'));
    }

   
}
