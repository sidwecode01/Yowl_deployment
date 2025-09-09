<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function index(){
        
        $allUser = User::all();
        return view('Dashboard', compact('allUser'));
    }
}
