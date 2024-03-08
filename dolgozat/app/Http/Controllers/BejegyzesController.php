<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bejegyzesek; 

class BejegyzesController extends Controller
{
    public function index(){
        $bejegyzesek = response()->json(Bejegyzesek::all());
        return $bejegyzesek;
     
        
    }
}
