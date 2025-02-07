<?php
function ulang($angka, $tulisan) {
    for ($i=0; $i < $angka; $i++) { 
        echo "$tulisan <br>";
    }
}

ulang(7, "Membongkar Rahasia Inti PHP");
?>