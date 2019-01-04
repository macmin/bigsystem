<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Education;
use App\Curriculum;


class CurriculumController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $curriculums = \DB::table('curriculums')
                        ->select('curriculums.user_id', 'users.name', 'users.apellidoP', 'users.apellidoM')
                        ->join('users' , 'curriculums.user_id', '=', 'users.id')
                        ->get();
        
                   
        return view("curriculum.index", ['curriculums' => $curriculums ]);
        
    }

    public function edit($id) 
    {   
        
        
    }

    
}
