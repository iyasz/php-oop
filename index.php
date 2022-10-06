<?php

class xirpl
{
    public $nama = "ILyasa", $umur = 17, $alamat = "Kahuripan Mas";

    public function sayHello()
    {
        return "Nama ku : $this->nama, Umurku : $this->umur, Alamatku : $this->alamat  ";
    }
}

$orang1 = new xirpl();
$orang1->nama = "iyas";
$orang1->umur = 16;
$orang1->alamat = "isekai";

$orang2 = new xirpl();
$orang2->nama = "Jajan";
$orang2->umur = 14;
$orang2->alamat = "GRAND";

echo "Nama ku : $orang1->nama <br> Umur : $orang1->umur ";
echo "<br>";
echo "<br>";
echo "Nama ku : $orang2->nama <br> Umur : $orang2->umur ";
