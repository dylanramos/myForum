<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display all the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $adminsNumber = 0;

        foreach($users as $user) {
            if($user->role->slug == 'ADMI') 
                $adminsNumber++;
        }

        return view ('users.index')->with(compact('users', 'adminsNumber'));
    }
}
