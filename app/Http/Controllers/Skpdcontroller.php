<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Skpdmodel;

class Skpdcontroller extends Controller
{
    var $request;
    function __construct()
    {
    	$this->middleware('auth');
    }

    public function path(Request $request, $id)
    {
    	$this->request = $request;
    	$path = Crypt::decryptString($id);
    	$f = explode('/',$path);
    	$param = [];
    	$method = $f[0];
    	for ($i=1; $i < count($f) ; $i++) { 
    		$param[] = $f[$i];
    	}
    	
        if (method_exists($this,$method)) {
            if ($request->ajax()) {
                $this->$method($param);
            }
            else{
                $this->httpRequest($method,$param);
            }
    	}
    	else{
    		echo "Not found";
    	}
    }

    public function httpRequest($method,$param=NULL){
    	echo view('template.head');
    	if (Auth::user()->level == 'admin') {
    		echo view('template.sideAdmin');
    	}
    	else{
    		echo view('template.sideUser');
    	}
    	echo view('template.attention');
    	$this->$method($param);
    	echo view('template.foot');
    }

    public function get_skpd()
    {
    	$model = new Skpdmodel();
    	echo json_encode($model->get_skpd($this->request->param));
    }
}
