<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller{

    function __construct(){
    	 $this->middleware('auth');
    }

    public function path(){
    	echo Auth::user()->level;
    }

    public function index(){
    	echo view('template.head');
    	if (Auth::user()->level == 'admin') {
    		echo view('template.sideAdmin');
    	}
    	else{
    		echo view('template.sideUser');
    	}
    	echo view('template.attention');
    	echo view('template.foot');
    }
}
