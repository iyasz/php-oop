<?php

class xirpl
{
    public $nama = "Ghil", $umur = 16, $alamat = "Citra Indah";

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

$orang1 = new xirpl("iyasz", 16, "Kahuripan mas");
$orang2 = new xirpl("ELaina", 17, "Kahuripan Mas");
$orang3 = new xirpl( "", 17, "");

var_dump($orang3);

// echo $orang1->sayHello();
// echo "<br>";
// echo "<br>";
// echo $orang2->sayHello();
