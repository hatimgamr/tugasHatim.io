<?php
class KelasInduk {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function hitungTotal() {
        return array_sum($this->data);
    }

    public function hitungRataRata() {
        $total = $this->hitungTotal();
        $jumlahData = count($this->data);
        return $total / $jumlahData;
    }

    public function cariNilaiTertinggi() {
        return max($this->data);
    }

    public function cariNilaiTerendah() {
        return min($this->data);
    }

    public function lihatSemuaNomor() {
        return $this->data;
    }
}

class KelasAnak extends KelasInduk {
    public function __construct() {
        $data = array();
        for ($i = 0; $i < 50; $i++) {
            $data[] = rand(1, 100); 
        }
        parent::__construct($data);
    }
}


$kelasAnak = new KelasAnak();
$total = $kelasAnak->hitungTotal();
$rataRata = $kelasAnak->hitungRataRata();
$nilaiTertinggi = $kelasAnak->cariNilaiTertinggi();
$nilaiTerendah = $kelasAnak->cariNilaiTerendah();
$semuaNomor = $kelasAnak->lihatSemuaNomor();


echo "Semua nomor: " . implode(", ", $semuaNomor) . "<br>";
echo "Total: " . $total . "<br>";
echo "Rata-rata: " . $rataRata . "<br>";
echo "Nilai tertinggi: " . $nilaiTertinggi . "<br>";
echo "Nilai terendah: " . $nilaiTerendah . "<br>";

echo "terima kasih pak cahyu atas ilmunya  <br>";


?>
