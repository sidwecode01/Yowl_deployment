<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index(){
        $allUser = User::all();
        return view('Dashboard', compact('allUser'));
    }
}
