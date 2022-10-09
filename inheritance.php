<?php

class produk
{
    public $judul, $pembuat, $penerbit, $harga, $jmlHalaman, $waktuMain, $episode, $tipe;


    public function __construct($judul, $pembuat, $penerbit, $harga, $jmlHalaman, $waktuMain, $episode, $tipe)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->episode = $episode;
        $this->tipe = $tipe;
    }

    public function cetakInfo()
    {
        $str = "{$this->judul} | {$this->pembuat}, {$this->penerbit} ";
        if ($this->tipe == "Anime") {
            $str .= "~ {$this->episode} - {$this->tipe}";
        } elseif ($this->tipe == "Game") {
            $str .= "~ {$this->waktuMain} - {$this->tipe}";
        } elseif ($this->tipe == "Manga") {
            $str .= "~Rp. {$this->harga} {$this->tipe}";
        }
        return $str;
    }
}

$produk1 = new produk("Fairy Tail", "Kamasishi", "Studio Kyoto", 0, 0, 0, 140, "Anime");
$produk2 = new produk("Mobile Legends", "iyasz", "Montoon", 0, 0, 120, 0, "Game");
$produk3 = new produk("Chaisaw Man", "Suzuhime", "PT jaya abadi", number_format(50000), 250, 0, 0, "Manga");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
echo $produk3->cetakInfo();
