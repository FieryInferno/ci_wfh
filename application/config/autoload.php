<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages']   = array();
$autoload['libraries']  = array('database','session','form_validation','pagination','cart');
$autoload['helper']     = array('file','url','form','text','html');
$autoload['config']     = array();
$autoload['language']   = array();
$autoload['model']      = array('M_Pegawai', 'M_Pekerjaan', 'LaporanModel', 'M_Jadwal');
