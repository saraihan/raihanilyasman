<?php
$konek = mysqli_connect("localhost","root","","latihan");

$id = $_GET['id'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];
$update = "UPDATE tamu SET nama='$nama', email='$email',pesan='$pesan' WHERE id_tamu='$id'";
$hasil = mysqli_query($konek, $update);

if ($hasil) {
    header("location:pagings.php");
}
else {
    echo "Update Data Tamu Gagal";
}
?>