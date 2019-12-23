<?php

namespace App\Http\Controllers;

use Datatables;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        return view('users');
    }
    public function usersList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}
