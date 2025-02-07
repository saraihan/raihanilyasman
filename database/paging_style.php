<h3>DATA TAMU</h3>
<p><a href="form_tamu.php">Input Tamu</a></p>
<link href="stylepaging.css" rel="stylesheet" type="text/css">
<?php
$konek = mysqli_connect("localhost", "root", "", "latihan");

$batas =  2;
$halaman = @$_GET['halaman'];
if (empty($halaman)){
    $posisi = 0;
    $halaman = 1;
}
else {
    $posisi = ($halaman-1) * $batas;
}

$tampil = "SELECT * FROM tamu LIMIT $posisi,$batas";
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

$no = $posisi+1;

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
$query2 = mysqli_query($konek, "SELECT * FROM tamu");
$jmldata = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);

$file = $_SERVER['PHP_SELF'];

echo "<div class=\"paging\">";

if($halaman > 1) {
    $prev=$halaman-1;
    echo "<span class=\"prevnext\"> 
    <a href=\"$file?halaman=$prev\"><< Prev</a>
    </span>";
}

else{
    echo "<span class=disabled><< Prev</span>";
}

for ($i=1; $i <= $jmlhalaman; $i++)
if ($i != $halaman) {
    echo " <a href=\"$file?halaman=$i\">$i</a>";
}
else {
    echo "<span class=\"current\">$i</span>";
}
if ($halaman < $jmlhalaman){
    $next=$halaman+1;
    echo "<span class\"prevnext\">
    <a href=\"$file?halaman=$next\">Next >></a>
    </span>";
}
else{
    echo "<span class=\"disabled\">Next >></span>";
}
echo "</div>";
?>