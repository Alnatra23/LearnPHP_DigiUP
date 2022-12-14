<?php
class Person{
    var $nama;
    var $alamat;
    protected $ktp;

function __construct($nama, $alamat){
    $this->nama=$nama;
    $this ->alamat=$alamat;
}

function set_ktp($ktp){
    $this->ktp=$ktp;
}

function tampil(){
    echo 'nama = '. $this->nama.',alamat = '.$this->alamat;
    echo '<br>';
    echo ',ktp = '.$this->ktp;
}
}
?>