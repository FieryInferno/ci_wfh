<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']          = 'awal';
$route['404_override']                = '';
$route['translate_uri_dashes']        = FALSE;
$route['tata_usaha']                  = 'Tata_usaha/Dashboard';
$route['tata_usaha/jadwal']           = 'Tata_usaha/Jadwal';
$route['tata_usaha/jadwal/generate']  = 'Tata_usaha/Jadwal/generate';
$route['tata_usaha/jadwal/cetak']     = 'Tata_usaha/Jadwal/cetak';
