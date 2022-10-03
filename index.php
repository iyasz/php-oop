<?php

class xirpl
{
    public $nama, $umur, $alamat;

    public function sayHello()
    {
        return "hello world";
    }
}

$orang1 = new xirpl();
$orang1->nama = "iyas";
$orang1->umur = 16;

echo "Nama ku : $orang1->nama <br> Umur : $orang1->umur ";
