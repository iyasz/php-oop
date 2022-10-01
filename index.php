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


var_dump($orang1);
