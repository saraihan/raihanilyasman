<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operasi = $_GET['operasi'];

echo "Nilai a : $a<br>";
echo "Nilai b : $b<br><br>";

switch ($operasi) {
    case 'jumlah':
        $c = $a + $b;
        echo "penjumlahan $a + $b = $c";
        break;

    case 'kurang':
        $c = $a - $b;
        echo "pengurangan $a - $b = $c";
        break;

    case 'kali':
        $c = $a * $b;
        echo "perkalian $a x $b = $c";
        break;

    case 'bagi':
        $c = $a / $b;
        echo "Pembagian $a / $b = $c";
        break;

    default:
        echo "Anda belum memilih operasi Hitung";
        break;
}
?>
<!-- // <?php
        // $a = $_GET['a'];
        // $b = $_GET['b'];
        // $operasi = $_GET['operasi'];

        // echo "Nilai a : $a<br>";
        // echo "Nilai b : $b<br><br>";

        // if ($operasi=="jumlah") {
        //     $c = $a + $b;  //RUMUS PENJUMLAHAN
        //     echo "Penjumlahan $a + $b = $c";
        // }

        // elseif ($operasi=="kurang") {
        //     $c = $a - $b; //RUMUS PENGURANGAN
        //     echo "Pengurangan $a - $b = $c";
        // }

        // elseif ($operasi=="kali") {
        //     $c = $a * $b; //RUMUS PERKALIAN
        //     echo "Perkalian $a x $b = $c";
        // }

        // elseif ($operasi=="bagi") {
        //     $c = $a / $b; //RUMUS PEMBAGIAN
        //     echo "Pembagian $a / $b = $c";
        // }

        // else {
        //     echo "Anda belum memilih operasi perhitungan";
        // }
        // 
        ?> -->