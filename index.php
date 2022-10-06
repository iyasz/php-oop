<?php

class xirpl
{
    public $nama, $umur, $alamat;

    public function sayHello()
    {
        return "Hello World";
    }
}

$orang1 = new xirpl();
$orang1->nama = "iyas";
$orang1->umur = 16;

echo "Nama ku : $orang1->nama <br> Umur : $orang1->umur ";
echo "<br>";
echo "Say hello : " . $orang1->sayHello();
