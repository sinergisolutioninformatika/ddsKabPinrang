<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Kategorimodel extends Model
{
    protected $table = 'kategori';

    public function get_kategori($id)
    {
    	$tbl = DB::table($this->table);
		$field = array('id','nam_kategori');
		for ($i=0; $i < count($field); $i++) { 
			if ($i===0) {
				$tbl->where($field[$i],'like','%'.$id.'%');
			}
			else{
				$tbl->orWhere($field[$i],'or like','%'.$id.'%');
			}
		}
		$tbl->limit(10);
		return $tbl->get();
    }
}
