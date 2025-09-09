<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Collection;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
    $usersPerDay = DB::table('sessions')
    ->selectRaw('DATE(FROM_UNIXTIME(last_activity)) as date, COUNT(DISTINCT user_id) as user_count')
    ->whereNotNull('user_id')
    ->where('last_activity', '>', Carbon::now()->subDays(7)->timestamp)
    ->groupBy(DB::raw('DATE(FROM_UNIXTIME(last_activity))'))
    ->orderBy('date', 'asc')
    ->get();

       $data = [];

foreach ($usersPerDay as $day) {
    $data[] = $day->user_count;
}





        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('Dashboard' , ['users'=> $users , 'usersPerDay'=>$data]);
    }


     public function indeDash(){
        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('dashboard' , compact('users'));
    }


}
