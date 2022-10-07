<?php

class xirpl
{
    public $nama, $anime, $nis, $umur, $alamat, $pekerjaan;

    public function sayHello()
    {
        return "$this->nama, $this->anime";
    }
}

$absen1 = new xirpl();
$absen1->nama = "Ababil dauza";
$absen1->anime = "Kanjut Geming";

$absen2 = new xirpl();
$absen2->nama = "Achmad Fadhillah";
$absen2->anime = "Nggih";

echo $absen1->sayHello();
echo "<br>";
echo $absen2->sayHello();
