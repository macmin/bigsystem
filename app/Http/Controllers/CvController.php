<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Education;


class CvController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cv.index');
    }

    public function show($id)
    {
        //$en = encrypt($id);
        //$en = base64_encode($id); 

        $decode = base64_decode($id);

        $user = User::find($decode);

        if (is_null ($user)) {
            abort(404);
        }

        $educations = \DB::table('educations')
                        ->select('school')
                        ->join('users' , 'educations.user_id', '=', 'users.id')
                        ->where('educations.user_id', $user->id)
                        ->get();

         
       
             
        return view('cv.show' , ['user' => $user, 'educations' => $educations ]);
    }
}
