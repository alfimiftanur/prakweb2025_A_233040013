<?php 
class Rumah{
    // properti
    public $warna = "Putih";
    public $jumlahKamar = 4;
    public $alamat = "Jln. Pasundan No. 1";

    // konstruktor
    public function __construct($warnaAwal, $KamarAwal, $alamatAwal){
        $this->warna = $warnaAwal;
        $this->jumlahKamar = $KamarAwal;
        $this->alamat = $alamatAwal;
    }

    // method
    
    public function kunciPintu(){
        return "Pintu sudah dikunci";
    }
    
    public function gantiWarna($warnaBaru){
        $this->warna = $warnaBaru;
        return "berhasil diubah menjadi " . $this->warna;
    }
    
}


    function pasangListrik(Rumah $rumah){
        return "Listrik telah dipasang di rumah dengan warna " . $rumah->warna.
        " yang beralamat di ". $rumah->alamat;
    }


$rumahSaya = new Rumah(" kuning", 6, "Jln. Merdeka No. 10");
// echo "Warna awal rumah saya: " . $rumahSaya->warna ;
// echo "<br>";    
// echo "Rumah saya: " . $rumahSaya->jumlahKamar;
// echo "<br>";
// echo "Warna baru rumah saya: ". $rumahSaya->gantiWarna("merah");
// echo "<br>";
$rumahTetangga = new Rumah("Pink",6,"Jln. Kenanga No. 8");
echo pasangListrik($rumahSaya);
// echo "<hr>";


// $rumahTetangga = new Rumah("Biru", 3, "Jln. Melati No. 5");
// echo "<br>";
// echo "Warna awal rumah tetangga: " . $rumahTetangga->warna ;
// echo "<br>";
// echo "Rumah tetangga: ". $rumahSaya->jumlahKamar;

?>