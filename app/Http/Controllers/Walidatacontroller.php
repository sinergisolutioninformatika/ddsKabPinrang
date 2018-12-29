<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Kategorimodel;
use App\Walidatamodel;
use App\Modeldata;
use Validator;
class Walidatacontroller extends Controller
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
    	echo view('walidata.index');
    }

    public function _form()
    {
    	echo view('walidata._form',['model' => NULL]);
    }

    public function get_ajax()
    {
    	$model = new Walidatamodel();
    	$reModel = $model->get_datatables();
        $data = [];
        $row = [];
        foreach ($reModel as $key) {
            $row['id'] = $key->idwalidata;
            $row['nama_skpd'] = $key->nama_skpd;
            $row['nama_kategori'] = $key->nam_kategori;
            $row['url']['edit'] = url('dashboard/'.Crypt::encryptString('forEdit/'.$key->idwalidata));
            $row['url']['delete'] = url('dashboard/'.Crypt::encryptString('forDelete/'.$key->idwalidata));
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

    public function get_kategori()
    {
    	$model  = new Kategorimodel();
    	echo json_encode($model->get_kategori($this->request->param));
    }

    public function save()
    {
    	$validWalidata = Validator::make($this->request->all(),[
    		'id_skpd' => 'required|string',
    		'kategori' => 'required|string',
    		'nama_data' => 'required|string',
    	]);
    	$msg = '';
    	if ($validWalidata->fails()) {
    		foreach ($validWalidata->errors()->all() as $key) {
    			$msg .= $key.' ';
    		}
    		$data = ['execute' => FALSE, 'message' => $msg];
    	}
    	else{
    		$model = new Walidatamodel;
    		$model->id_skpd = $this->request->id_skpd;
    		$model->id_kategori = $this->request->kategori;
    		$model->save();
    		
    		$mdData = new Modeldata;
    		$mdData->nama_data = $this->request->nama_data;
    		$mdData->id_walidata = $model->id;
    		$mdData->save();
    		$data = ['execute' => true, 'message' => 'Data tersimpan'];
    	}
    	echo json_encode(['respon' => $data]);
    }
}
