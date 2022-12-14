<?php
require 'mahasiswa.php';

$mhs=new Mahasiswa('Alif Naufal','Gresik','111');
$mhs->tampil();

$mhs->set_ktp('5362');
$mhs->prodi='Teknik Informatika';
echo ',ktp = '.$mhs->get_ktp();
echo ',prodi = '.$mhs->prodi;
?>