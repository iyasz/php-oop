<?php

class produk
{
    public $judul, $pembuat, $penerbit, $harga, $jmlHalaman, $waktuMain, $episode;


    public function __construct($judul, $pembuat, $penerbit, $harga, $jmlHalaman, $waktuMain, $episode)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->episode = $episode;
    }

    public function cetakInfo()
    {
        // $str = "{$this->judul} | {$this->pembuat}, {$this->penerbit} ";
        // if ($this->tipe == "Anime") {
        //     $str .= "~ {$this->episode} Episode - {$this->tipe} ";
        // } elseif ($this->tipe == "Game") {
        //     $str .= "~ {$this->waktuMain} Days - {$this->tipe} ";
        // } elseif ($this->tipe == "Manga") {
        //     $str .= "~ Rp. {$this->harga} {$this->tipe}";
        // }

        // return $str;
    }
}

class anime extends produk
{
    public function cetakInfo()
    {
        $str = "Anime : {$this->judul} | {$this->pembuat}, {$this->penerbit} ~ {$this->episode} Episode  ";
        return $str;
    }
}

$produk1 = new anime("Fairy Tail", "Kamasishi", "Studio Kyoto", 0, 0, 0, 140,);
$produk2 = new produk("Mobile Legends", "iyasz", "Montoon", 0, 0, 120, 0);
$produk3 = new produk("Chaisaw Man", "Suzuhime", "PT jaya abadi", number_format(50000), 250, 0, 0);

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
echo $produk3->cetakInfo();
