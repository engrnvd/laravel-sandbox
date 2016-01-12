<?php

namespace App\Http\Controllers;

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

    public function helpers(Request $request)
    {
//        $array = [
//            'a' => 'b',
//            'c' => [
//                'd' => 'e',
//                'f' => 'g',
//                'h' => [
//                    'i','j'
//                ],
//            ]
//        ];

//        $array = array_dot($array);

        $arr = [
            ['name' => 'Desk', 'price' => 100],
            ['name' => 'Desk2', 'price' => 200]
        ];

        $array = array_except($arr, ['price']); // not recursive

        $user = factory(User::class)->make();
        dd($user->attributesToArray());

        dd($array);

    }
    
    public function db (Request $request)
    {
        $recs = \Illuminate\Support\Facades\DB::table("tasks")->lists("name","id");
        dd($recs);
    }
    
    public function md (Request $request) {
        return view("md.test");
    }
}
