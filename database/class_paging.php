<?php
class pagings{
    function cariPosisi($batas){
        if(empty($_GET['halaman'])){
            $posisi = 0;
            $_GET['halaman'] = 1;
        }
        else{
            $posisi = ($_GET['halaman']-1) * $batas;
    }
    return $posisi;
}

// Fungsi untuk Menghitung Total Halaman
function jumlahHalaman($jmldata, $batas){
    $jmlhalaman = ceil($jmldata/$batas);
}

// Fungsi link halaman 1,2,3 .... Next, Prev, First, Last
function navHalaman($halaman_aktif, $jmlhalaman){
    $file = $_SERVER['PHP_SELF'];

    $link_halaman = "";

    // link First and Previous
    if ($halaman_aktif >= 1) {
        $prev = $halaman_aktif-1;
        $link_halaman .= " <a href=\"$file?halaman=1\">First</a> | <a href=\"$file?halaman=$prev\">Prev</a> | ";
    }
    else{
        $link_halaman .= " First | Prev | ";
    }

    // Link Halaman 1,2,3, ...
    // Angka Awal
    $angka = ($halaman_aktif >= 4 ? " ... " : " "); //Ternary
    for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
        if ($i <= 5) continue;
        $angka .= "<a href=\"$file?halaman=$i\">$i</a> | ";
    }

    // Angka Tengah
    $angka .= " <b>$halaman_aktif</b> | ";
    for ($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
        if($i > $jmlhalaman) break;
        $angka .= "<a href=\"$file?halaman=$i\">$i</a> | ";
    }

    // Angka Akhir
    $angka .= ($halaman_aktif+4<$jmlhalaman ? " ... | <a href=\"$file?halaman=$jmlhalaman\">$jmlhalaman</a> | " : " ");
    $link_halaman .= "$angka";

    // Link Next and Last
    if ($halaman_aktif < $jmlhalaman){
        $next=$halaman_aktif+1;
        $link_halaman .= " <a href=\"$file?halaman=$next\">Next</a> | <a href=\"$file?halaman=$jmlhalaman\">Last</a> ";
    }
    else{
        $link_halaman .= " Next | Last ";
    }
    return $link_halaman;
}
}
?>