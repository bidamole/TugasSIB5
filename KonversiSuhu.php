<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function getSatuanSuhuAwal() {
        return $this->satuanSuhuAwal;
    }

    public function getBesaranSuhu() {
        return $this->besaranSuhu;
    }

    public function getSatuanSuhuTujuan() {
        return $this->satuanSuhuTujuan;
    }

    public function konversi() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            return ($this->besaranSuhu * 9/5) + 32;
        } elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            return ($this->besaranSuhu - 32) * 5/9;
        } elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            return $this->besaranSuhu * 0.8;
        } elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            return $this->besaranSuhu / 0.8;
        } else {
            return "Konversi tidak valid";
        }
    }
    
    public function cetak() {
        echo 'Satuan Suhu Awal : ' . $this->satuanSuhuAwal;
        echo '<br>Besaran Suhu : ' . $this->besaranSuhu;
        echo '<br>Satuan Suhu Tujuan : ' . $this->satuanSuhuTujuan;
        echo '<br>Hasil Konversi Suhu : ' . $this->konversi($this->satuanSuhuAwal, $this->satuanSuhuTujuan);
        echo '<br>';
    }
    
}
?>
