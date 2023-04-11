<?php 

echo "If elseif else <br>";
if ($nilai = 67) {
    if ($nilai >= 90) {
        $grade = "A+";
        $keterangan = "LULUS";
        } elseif ($nilai >= 80) {
          $grade = "A";
          $keterangan = "LULUS";
        }
        elseif ($nilai >= 70) {
          $grade = "B";
          $keterangan = "LULUS";
        }
        elseif ($nilai >= 60)
        {
          $grade = "C";
          $keterangan = "LULUS";
        }
        else
        {
          $grade = "D";
          $keterangan = "TIDAK LULUS";
        }
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Keterangan : " . $keterangan;
        echo "<br>";
        echo "Indeks Prestasi : " . $grade;
      }


echo "<br>";
echo "<br>";


echo "switch case <br>";
$rpl10 = "Dilah";
switch ($rpl10) {
	case "Beby":
		echo "Beby Azzura 10 RPL";
		break;
	case "Tiara":
		echo "Tiara Candy Syaqila 10 RPL";
		break;
	case "Nori":
		echo "Syiffa Noriza Nafasyah 10 RPL";
		break;
	case "Ghadiza":
		echo "Ghadiza Naura Aliya 10 RPL";
		break;
	case "Hanun":
		echo "Hanun Hafizoh 10 RPL";
		break;
	case "Asya":
		echo "Firasya Alya Kamila 10 RPL";
		break;
    case "Fildza":
        echo "Fildza Nazhifa 10 RPL";
        break;
    case "Amel":
        echo "Amelia Cahyani 10 RPL";
        break;
    case "Nabilla":
        echo "Nabilla Ramadhani 10 RPL";
        break;
    case "Zaskia":
        echo "Zaskia Zunnurain 10 RPL";
        break;
    case "Asiah":
        echo "Asiah 10 Rpl";
        break;
    case "Dilah":
        echo "Syahida Nur Hilma Adilah 10 RPL";
        break;
	default:
		echo "Siswi tidak ditemukan";
		break;
}


echo "<br>";
echo "<br>";


echo "foreach <br>";
echo "Dilah's Books <br>";
$bukuDilah = array("Jakarta Sebelum Pagi", "Cerita - Cerita Jakarta", "Kita Pulang Hari Ini");
 
foreach($bukuDilah as $buku){
	echo $buku."<br/>";
}