<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usersajat_Controller extends Controller
{
    public function index(){
        $users = User_sajat::all(){
        return response()->json($users);
        }
    }
}
