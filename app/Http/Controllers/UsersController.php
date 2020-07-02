<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    /*public function __construct()
	{
	    $this->middleware('auth');
    }
    */
    

    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function usersAll()
    {
        $users = DB::select('select * from users');

        return view('users', ['users' => $users]);
    }




    public function studentsAll()
    {
        $students = DB::select('select * from students');

        return view('students', ['students' => $students]);
    }

/*
    public function formAddStudent()
    {
        return view('addStudent');
    }
*/



	public function dashboard(){
		//
	}


    
}