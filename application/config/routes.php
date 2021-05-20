<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']          = 'awal';
$route['404_override']                = '';
$route['translate_uri_dashes']        = FALSE;

$route['tata_usaha']                  = 'Tata_usaha/Dashboard';
$route['tata_usaha/jadwal']           = 'Tata_usaha/Jadwal';
$route['tata_usaha/jadwal/generate']  = 'Tata_usaha/Jadwal/generate';
$route['tata_usaha/jadwal/cetak']     = 'Tata_usaha/Jadwal/cetak';

$route['pegawai']                       = 'Pegawai/Pegawai';
$route['pegawai/laporan_harian']        = 'Pegawai/Pegawai/laporan_harian';
$route['pegawai/laporan_harian/tambah'] = 'Pegawai/Pegawai/input_laporan_harian';
$route['pegawai/list_pekerjaan']        = 'Pegawai/Pegawai/listpekerjaan';
$route['pegawai/input_hasil']           = 'Pegawai/Pegawai/input_hasil';

$route['kepala_seksi']                                            = 'KepalaSeksi/KepalaSeksi';
$route['kepala_seksi/alokasi_pekerjaan']                          = 'KepalaSeksi/AlokasiPekerjaan';
$route['kepala_seksi/cek_pekerjaan_pegawai']                      = 'KepalaSeksi/AlokasiPekerjaan/cekPekerjaanPegawai';
$route['kepala_seksi/pekerjaan.html']                             = 'KepalaSeksi/Pekerjaan';
$route['kepala_seksi/pekerjaan/tambah.html']                      = 'KepalaSeksi/Pekerjaan/tambah';
$route['kepala_seksi/pekerjaan/input_sub_pekerjaan.html']         = 'KepalaSeksi/Pekerjaan/inputSubPekerjaan';
$route['kepala_seksi/pekerjaan/edit/(:any)']                      = 'KepalaSeksi/Pekerjaan/edit/$1';
$route['kepala_seksi/pekerjaan/lihat/(:any)']                     = 'KepalaSeksi/Pekerjaan/lihat/$1';
$route['kepala_seksi/pekerjaan/edit_sub_pekerjaan/(:any)']        = 'KepalaSeksi/Pekerjaan/editSubPekerjaan/$1';
$route['kepala_seksi/pekerjaan/hapus_sub_pekerjaan/(:any/(:any)'] = 'KepalaSeksi/Pekerjaan/hapusSubPekerjaan/$1/$2';
$route['kepala_seksi/pekerjaan/hapus/(:any)']                     = 'KepalaSeksi/Pekerjaan/hapus/$1';