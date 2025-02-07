<?php
$konek = mysqli_connect("localhost", "root", "", "latihan");

// memanggil dan menginisiasi class
include "class_paging.php";

$p = new Pagings;

// Tentukan limit atau batas
$batas = 2;

// Cek halaman dan posisi data
$posisi = $p->cariPosisi($batas);

// Sesuaikan query dengan posisi dan batas
$query =  "SELECT * FROM tamu LIMIT $posisi,$batas";
$tampil = mysqli_query($konek, $query);

echo "<table border='1' cellpadding='10'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>";

    $no = $posisi+1;
    while ($data=mysqli_fetch_array($tampil)){
        echo "<tr>
        <td>$no</td>
        <td>$data[nama]</td>
        <td>$data[email]</td>
        <td>$data[pesan]</td>
        <td><a href=\"edit_tamu.php?id=$data[id_tamu]\">Edit</a> | <a href=\"hapus_tamu.php?id=$data[id_tamu]\">Hapus</a></td>
    </tr>";
    $no++;
    }
    echo "</table><br>";

// Dapatkan Jumlahd data keseluruhan
$query2 = mysqli_query($konek, "SELECT * FROM tamu");
$jmldata = mysqli_num_rows($query2);

// Dapatkan jumlah halaman
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);

// Cetak link Navigasi Halaman
$linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
echo $linkHalaman;
?>