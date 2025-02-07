<?php
$konek = mysqli_connect("localhost","root","","latihan");

$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];

$input = "INSERT INTO tamu (nama,email,pesan) VALUES ('$nama','$email','$pesan')";
$hasil = mysqli_query($konek, $input);

if ($hasil) {
    header("location:tampil_admin.php");
}
else {
    echo "Input data tamu gagal";
}
?>