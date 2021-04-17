<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pekerjaan extends CI_Model {
	
public function count_selesai()
	{
		
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]' and alokasi_pekerjaan.status = 'selesai'" );
			$this->db->from("alokasi_pekerjaan");
			 return $this->db-> count_all_results();
	}
	public function Getpekerjaan($where="")
	{
		$data = $this->db->query('select * from pekerjaan '.$where);
		return $data->result_array();
	}

	public function count_total()
	{
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]'" );
			$this->db->from("alokasi_pekerjaan");
			 return $this->db-> count_all_results();
	}
	public function count_belumselesai()
	{
		$this->db->where("alokasi_pekerjaan.nama_pegawai= '$_SESSION[nama]' and (alokasi_pekerjaan.status = 'Menunggu Verifikasi' or alokasi_pekerjaan.status = 'Belum Selesai')" );
			$this->db->from("alokasi_pekerjaan");
			return $this->db-> count_all_results();
	}
	public function count_sosial()
	{
		$this->db->where("bagian","Sosial");
			$this->db->from("pekerjaan");
			 return $this->db-> count_all_results();
	}


	public function count_produksi()
	{
		$this->db->where("bagian","Produksi");
		$this->db->from("pekerjaan");
		return $this->db-> count_all_results();
	}

	
	public function get_pekerjaanpegawai(){
	$this->db->select('*');
	$this->db->from('alokasi_pekerjaan');
	$this->db->where('nama_pegawai', $_SESSION[nama]);
	return $this->db->get()->result();

}
public function get_pekerjaankepalaseksi(){
	$this->db->select('*');
	$this->db->from('pekerjaan');
	$this->db->where('bagian', $_SESSION[jabatan]);
	return $this->db->get()->result();

}
public function get_detailpekerjaan($id_pekerjaan){
	$this->db->select('*');
	$this->db->from('detail_pekerjaan');
	$this->db->where('id_pekerjaan', $id_pekerjaan);
	return $this->db->get()->result();

}
function idpekerjaan(){
		$q = $this->db->query("select MAX(id_pekerjaan) as idpekerjaan from pekerjaan");
       $hasil=$q->row();
       return $hasil->idpekerjaan;
	}

	function idbekerja(){
		$q = $this->db->query("select MAX(id_bekerja) as id_bekerja from alokasi_pekerjaan");
       $hasil=$q->row();
       return $hasil->id_bekerja;
	}
	
	public function Insertdata($tableName,$data)
	{
		
		$res = $this->db->insert($tableName,$data);
		return $res ;
		}

	public function getalokasikasi(){
	$this->db->select('*');
	$this->db->from('alokasi_pekerjaan');
	$this->db->where('dari', $_SESSION[nama]);
	return $this->db->get()->result();

}
public function Updatedata($tableName,$data,$where)
	{
		$res = $this->db->update($tableName,$data, $where);
		return $res ;

		}
}
