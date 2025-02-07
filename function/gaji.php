<form method="get" action="gaji.php">
    Gaji Rp. <input type="text" name="gaji">
    <input type="submit" name="proses" value="Proses">
</form>

<?php
if (isset($_GET['proses'])){
    include "fungsi_terbilang.php";

    $gaji = $_GET['gaji'];
    $format_gaji = number_format($gaji, 0, ",",".");
    $terbilang_gaji = ucwords(terbilang($gaji));

    echo "Gaji Anda: Rp. $format_gaji <br><br>";
    echo "Terbilang: <br><br>$terbilang_gaji</b> Rupiah";
}
?>