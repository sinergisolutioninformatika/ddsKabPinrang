<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Walidatamodel extends Model
{
    protected $table = 'walidata';
    public $timestamps = false;
    var $column_order = ['idwalidata','nama_skpd','nam_kategori'];
    var $column_search = ['idwalidata','nama_skpd','nam_kategori'];
    var $tbl = NULL;
    private function _get_datatables_query(){
    	$this->tbl = DB::table($this->table);
    	$i=0;
    	foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->tbl->where($item,'like','%'.$_POST['search']['value'].'%');
				}
				else
				{
					$this->tbl->orWhere($item,'like','%'.$_POST['search']['value'].'%');
				}
			}
			$i++;
		}
		$this->tbl->join('skpd','skpd.id','=','walidata.id_skpd');
		$this->tbl->join('kategori','kategori.id','=','walidata.id_kategori');
		if(isset($_POST['order'])) // here order processing
		{
			$this->tbl->orderBy($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->tbl->orderBy(key($order), $order[key($order)]);
		}
    }

    function get_datatables(){
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
			$this->tbl->offset($_POST['start'])->limit($_POST['length']);
		return $this->tbl->get();
	}


	

	function count_filtered(){
		$this->_get_datatables_query();
		return $this->tbl->count();
	}

	public function count_all()
	{
		return DB::table($this->table)->count();
		// $this->db->from($this->table);
		// return $this->db->count_all_results();
	} 
}
