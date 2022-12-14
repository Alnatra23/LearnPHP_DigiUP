<?php
require 'person.php';

class Mahasiswa extends Person{
    private $nim;
    public $prodi;

    function __construct($nama,$alamat,$nim=''){
        parent::__construct($nama,$alamat);
        $this->nim = $nim;
    }

    function tampil(){
        echo 'nama='.$this->nama.',alamat = '.$this->alamat.',nim= '.$this->nim;
    }

    function get_ktp(){
        return $this->ktp;
    }
}
?>