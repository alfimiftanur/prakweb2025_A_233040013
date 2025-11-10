<?php 
// == CHILD CLASS KEDUA ==
class Game extends Produk {

    // Properti khusus milik Game
    public $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }


    // Method khusus Game
    public function getInfoProduk() {
        $str = "Game : " . parent::getLabel() . " | Rp. {$this->harga} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


// == BAGIAN OBJECT ==

// Kita buat object dari CHILD CLASS, bukan dari Parent
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


// Menjalankan method
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// Hasil:
// Komik : Masashi Kishimoto, Shonen Jump | Rp. 30000 - 100 Halaman.
// Game : Neil Druckmann, Sony Computer | Rp. 250000 ~ 50 Jam.