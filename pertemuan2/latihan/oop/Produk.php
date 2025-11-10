<?php
class Produk {
    // Properti umum
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    // Constructor milik Parent
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method milik Parent
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


class Komik extends Produk {

    // Properti khusus milik Komik
    public $jmlHalaman;

    // Kita buat constructor untuk Child Class
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman ) {

        // 'parent::' digunakan untuk memanggil
        // constructor milik PARENT CLASS (Produk)
        // agar properti umum (judul, penulis, dll) tetap diisi.
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        // Set properti khusus milik Komik
        $this->jmlHalaman = $jmlHalaman;

    }

    // Method khusus Komik
    public function getInfoProduk() {
        // 'parent::' juga bisa dipakai memanggil method parent
        $info = "komik: ". parent::getLabel() ." |  harga:". $this->harga. " |" . $this->jmlHalaman." halaman: ";
        return $info;
        // $str = "Komik : " . parent::getLabel() . " | Rp. {$this->harga} - {$this->jmlHalaman} Halaman.";
        // return $str;
    }
}

$komik1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
echo $komik1->getInfoProduk();
?>