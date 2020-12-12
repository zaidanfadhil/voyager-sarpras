<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuangNetworkAdvance;

class SaprasController extends Controller
{
    
    public function index(){
        $RuangNetworkAdvance = RuangNetworkAdvance::all();
        return view('usernya.networkadv' ,['netadv'=> $RuangNetworkAdvance]);
    }
}
