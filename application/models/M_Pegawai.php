<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pegawai extends CI_Model {

	protected $table	= 'pegawai';

	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}

public function Getpegawai($where="")
	{
		$data = $this->db->query('select * from pegawai '.$where);
		return $data->result_array();
	}

public function Getgolongan($where="")
	{
		$data = $this->db->query('select * from golongan '.$where);
		return $data->result_array();
	}

public function Getjabatan($where="")
	{
		$data = $this->db->query('select * from jabatan '.$where);
		return $data->result_array();
	}

		public function Insertdata($tableName,$data)
	{

		$res = $this->db->insert($tableName,$data);
		return $res ;
		}
			public function Updatedata($tableName,$data,$where)
	{
		$res = $this->db->update($tableName,$data, $where);
		return $res ;

		}
		public function Deletedata($tableName,$where)
	{
		$res = $this->db->delete($tableName,$where);
		return $res ;

		}

}
