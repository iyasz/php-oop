<?php

class xirpl
{
    public $nama = "ILyasa", $umur = 17, $alamat = "Kahuripan Mas";

    public function sayHello()
    {
        return "$this->nama, $this->umur, $this->alamat  ";
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

echo $orang1->sayHello();
echo "<br>";
echo "<br>";
echo $orang2->sayHello();
