Hobby yang Kamu Pilih:<br>
<?php
$hobby=$_GET['hobby'];

// HITUNG JUMLAH HOBBY YANG DI CEK ATAU DI PILIH
$jumlah_hobby=count($hobby);

for ($indeks=0; $indeks < $jumlah_hobby; $indeks++) { 
    echo "$hobby[$indeks] <br>";
}
?>