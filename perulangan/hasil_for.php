<?php
$jumlah_file = $_GET['jumlah_file'];

$i = 1;
while ($i <= $jumlah_file) {
    echo "File ke-$i : <input type=\"file\" name=\"namafile$i\"><br>";
    $i++;
}

// for ($i=1; $i<=$jumlah_file; $i++) { 
//     echo "file ke-$i : <input type=\"file\" name=\"namafile$i\"><br>";       
// } 
