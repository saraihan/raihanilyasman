<?php
$konek = mysqli_connect("localhost","root","","latihan");

$id = $_GET['id'];

$hapus = "DELETE FROM tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($konek, $hapus);

if ($hasil) {
    header("location:tampil_admin.php");
}
else {
    echo "HAPUS DATA TIDAK BERHASIL";
}
?>