<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
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

    public function deleteUser($id){
        $oneUse = User::find($use)->first();
        $oneUse->delete();
        return redirect('/Dash')->with('status' , 'Delete successfull');
    }

    public function indexDash(){

        // les totaux
        $totalUser = User::count();
        $totalPost = Post::count();
        $totalComment = Comment::count();


        // user

    $usersPerDay = DB::table('users')
    ->selectRaw('DAYNAME(created_at) as day, COUNT(*) as total')
    ->whereNotNull('created_at')
    ->groupBy('day')
    ->orderByRaw('FIELD(day, "Monday", "Tuesday", "Wedneday", "Thursday", "Friday", "Saturday", "Sunday")')
    ->get();

       $data = [];
       $day = [];

foreach ($usersPerDay as $day) {
    $label[] = $day->day;
    $data[] = $day->total;
}


// post
$postPerDay = DB::table('posts')
    ->selectRaw('DAYNAME(created_at) as day, COUNT(*) as total')
    ->whereNotNull('created_at')
    ->groupBy('day')
    ->orderByRaw('FIELD(day, "Monday", "Tuesday", "Wedneday", "Thursday", "Friday", "Saturday", "Sunday")')
    ->get();

    $postData =[];
    $postLebal = [];


foreach ($postPerDay as $post) {
        $postData[] = $post->total;
        $postLebal[] = $post->day;
}

    // comments

    $commentPerDay = DB::table('comments')
    ->selectRaw('DAYNAME(created_at) as day, COUNT(*) as total')
    ->whereNotNull('created_at')
    ->groupBy('day')
    ->orderByRaw('FIELD(day, "Monday", "Tuesday", "Wedneday", "Thursday", "Friday", "Saturday", "Sunday")')
    ->get();


    $commentLabel = [];
    $commentData = [];


foreach ($commentPerDay as $comment) {
    $commentLabel[] = $comment->day;
    $commentData[] = $comment->total;}

        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('Dashboard' , ['users'=> $users,
                                 'usersPerDay'=>$data,
                                  "label"=>$label,
                                   'postLabel'=> $postLebal,
                                    'postData' => $postData,
                                     'commentLabel' => $commentLabel,
                                      'commentData' => $commentData,
                                    'totalUser' => $totalUser,
                                    'totalPost' => $totalPost,
                                    'totalComment' => $totalComment
                                    ]);
    }


     public function indeDash(){
        $users = User::orderBy('last_active_at', 'DESC')->get();
        return view('dashboard' , compact('users'));
    }


}
