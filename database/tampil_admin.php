<h3>DATA TAMU</h3>
<p><a href="form_tamu.php">Input Tamu</a></p>

<?php
$konek = mysqli_connect("localhost", "root", "", "latihan");

$tampil = "SELECT * FROM tamu order BY id_tamu";
$hasil = mysqli_query($konek, $tampil);
$total = mysqli_num_rows($hasil);

echo "<table border='1' cellpadding='10'>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>";

$no = 1;

while ($data = mysqli_fetch_array($hasil)) {
    echo "<tr>
        <td>$no</td>
        <td>$data[nama]</td>
        <td>$data[email]</td>
        <td>$data[pesan]</td>
        <td><a href=\"edit_tamu.php?id=$data[id_tamu]\">Edit</a> | <a href=\"hapus_tamu.php?id=$data[id_tamu]\">Hapus</a></td>
    </tr>";

    $no++;

}
echo "</table>";
echo "<p>Jumlah Tamu:<b>$total</b> Orang</p>";
?>