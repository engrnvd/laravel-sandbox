<?php

namespace App\Http\Controllers;

use App\Events\SomeEvent;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a list of all of the users.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        //abort(404,"safha nahi mil paya");

        //event(new SomeEvent($request->user()));

        $user = Auth::user();
        $data = ['user' => $user];
        if($user->role == 'admin')
        {
            $data['users_list'] = User::all();
        }
        return view('user.index',$data);
    }

    public function view(Request $request)
    {
        return "View Action";

    }
}
