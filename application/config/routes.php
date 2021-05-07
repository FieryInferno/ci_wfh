<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']          = 'awal';
$route['404_override']                = '';
$route['translate_uri_dashes']        = FALSE;

$route['tata_usaha']                  = 'Tata_usaha/Dashboard';
$route['tata_usaha/jadwal']           = 'Tata_usaha/Jadwal';
$route['tata_usaha/jadwal/generate']  = 'Tata_usaha/Jadwal/generate';
$route['tata_usaha/jadwal/cetak']     = 'Tata_usaha/Jadwal/cetak';

$route['pegawai/laporan_harian']        = 'Pegawai/Pegawai/laporan_harian';
$route['pegawai/laporan_harian/tambah'] = 'Pegawai/Pegawai/input_laporan_harian';

$route['kepala_seksi']                        = 'KepalaSeksi/KepalaSeksi';
$route['kepala_seksi/alokasi_pekerjaan']      = 'KepalaSeksi/AlokasiPekerjaan';
$route['kepala_seksi/cek_pekerjaan_pegawai']  = 'KepalaSeksi/AlokasiPekerjaan/cekPekerjaanPegawai';