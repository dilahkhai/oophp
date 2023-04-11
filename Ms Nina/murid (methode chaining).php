<?php
class Murid{
    public $nis, $nama, $kelas;

    public function set_nis($nis_murid){
        $this->nis = $nis_murid;
        return $this;
    }

    public function set_nama($nama_murid){
        $this->nama = $nama_murid;
        return $this;
    }

    public function set_kelas($kelas_murid){
        $this->kelas = $kelas_murid;
        return $this;
    }

    public function get_bio(){
        return "Nama saya adalah " . $this->nama . " dengan nis " . $this->nis . " kelas " . $this->kelas;
    }
}

$murid_idn = new Murid();
$murid_idn->set_nis(1177050079);
$murid_idn->set_nama("Dilah");
$murid_idn->set_kelas("10 RPL");
echo $murid_idn->get_bio(). "<br>";

echo PHP_EOL;

//method chaining
$murid_idn2 = new Murid();
echo $murid_idn2->set_nis(1177050080)->set_nama("Abel")->set_kelas("10 RPL")->get_bio();