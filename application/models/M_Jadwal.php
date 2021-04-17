<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jadwal extends CI_Model {

  protected $table  = 'jadwal';

  public function insert($jadwal)
  {
    print_r($jadwal); echo '<br/>';
    $this->db->insert($this->table, $jadwal);
  }

  public function getAll()
  {
    $this->db->join('pegawai', $this->table . '.id_pegawai = pegawai.id');
    return $this->db->get($this->table)->result_array();
  }

  public function delete()
  {
    $this->db->empty_table($this->table);
  }
}
