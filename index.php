<?php

class xirpl
{
    public $nama, $umur, $alamat;

    public function sayHello()
    {
        return "$this->nama, $this->umur, $this->alamat  ";
    }

    public function __construct($nama, $umur, $alamat)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
    }
}

class guru
{
    public $nama, $umur, $mapel;

    public function infoGuru()
    {
    }
}

$orang1 = new xirpl("iyasz", 16, "Kahuripan mas");
$orang2 = new xirpl("ELaina", 17, "Kahuripan Mas");

$guru1 = new guru();

var_dump($orang1);

// echo $orang1->sayHello();
// echo "<br>";
// echo "<br>";
// echo $orang2->sayHello();
