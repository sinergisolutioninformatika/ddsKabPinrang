<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Usermodel;
use Validator;

class Usercontroller extends Controller
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

    public function index()
    {
    	echo view('management.user.index');
    }

    public function get_ajax(){
    	$model = new Usermodel();
        $reModel = $model->get_datatables();
        $data = [];
        $row = [];
        foreach ($reModel as $key) {
            $row['email'] = $key->email;
            $row['nama'] = $key->name;
            $row['nama_skpd'] = $key->nama_skpd;
            $row['url']['edit'] = url('dashboard/'.Crypt::encryptString('forEdit/'.$key->email));
            $row['url']['delete'] = url('dashboard/'.Crypt::encryptString('forDelete/'.$key->email));
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $model->count_all(),
            "recordsFiltered" => $model->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function _form()
    {
    	echo view('management.user._form',['model'=>NULL]);
    }

    public function save(){
    	$valid = Validator::make($this->request->all(),[
           'email' => 'required|string|email|max:255|unique:users',
           'id_skpd' => 'required|string',
           'name' => 'required|string',
           'password' => 'required|string|min:5',
           'level' => 'required|string'
        ]);
        if ($valid->fails()) {
        	$msg = '';
        	foreach ($valid->errors()->all() as $key) {
        		$msg .= $key.' ';
        	}
        	


        	$data = ['execute' => false, 'message' =>$msg ];
        }
        else{
        	$model = new Usermodel();
        	$model->email = $this->request->email;
        	$model->name = $this->request->name;
        	$model->password = bcrypt($this->request->password);
        	$model->level = $this->request->level;
        	$model->id_skpd = $this->request->id_skpd;
        	$model->save();
        	$data = ['execute' => true, 'message' => 'Data tersimpan'];
        }
    	echo json_encode(['respon' => $data]);
    }
}
