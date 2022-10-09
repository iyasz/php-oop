<?php

class produk
{
    public $judul, $pembuat, $penerbit, $harga, $jmlHalaman, $wwaktuMain, $episode, $tipe;


    public function __construct($judul, $pembuat, $penerbit, $harga, $jmlHalaman, $wwaktuMain, $episode, $tipe)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wwaktuMain = $wwaktuMain;
        $this->episode = $episode;
        $this->tipe = $tipe;
    }
}

$produk1 = new produk("Fairy Tail", "Kamasishi", "Studio Kyoto", 0, 0, 0, 140, "Anime");
$produk2 = new produk("Mobile Legends", "iyasz", "Montoon", 0, 0, 120, 0, "Game");

var_dump($produk1);
