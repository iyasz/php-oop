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

echo "Nama ku : $orang1->nama <br> Umur : $orang1->umur ";
echo "<br>";
echo "Say hello : " . $orang1->sayHello();
echo "<br>";
echo $orang1->sayHello();
