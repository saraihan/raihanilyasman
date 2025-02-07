<?php
// FORMAT TANGGAL DI DATABASE MY SQL
$tanggal=date("Y-m-d");
// AMBIL ATAU PISAHKAN TANGGAL BULAN DAN TAHUN
$ambiltahun = substr($tanggal,0,4);
$ambilbulan = substr($tanggal,5,2);
$ambiltanggal = substr($tanggal,8,2);
// UBAH ANGKA BULAN MENJADI NAMA BULAN
if ($ambilbulan=="01") $namabulan="JANUARI";
elseif ($ambilbulan=="02") $namabulan="FEBRUARI";
elseif ($ambilbulan=="03") $namabulan="MARET";
elseif ($ambilbulan=="04") $namabulan="APRIL";
elseif ($ambilbulan=="05") $namabulan="MEI";
elseif ($ambilbulan=="06") $namabulan="JUNI";
elseif ($ambilbulan=="07") $namabulan="JULI";
elseif ($ambilbulan=="08") $namabulan="AGUSTUS";
elseif ($ambilbulan=="09") $namabulan="SEPTEMBER";
elseif ($ambilbulan=="10") $namabulan="OKTOBER";
elseif ($ambilbulan=="11") $namabulan="NOVEMBER";
elseif ($ambilbulan=="12") $namabulan="DESEMBER";

echo "FORMAL TANGGAL INGGRIS: $tanggal<br><br>";
echo "FORMAT TANGGAL INDONESIA: 
        $ambiltanggal-$namabulan-$ambiltahun";
?>
