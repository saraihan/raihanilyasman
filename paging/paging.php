<?php
$konek = mysqli_connect("localhost","root","","latihan");

$batas = 2;
$halaman = @$_GET['halaman'];
if (empty($halaman)){    
    $posisi = 0;
    $halaman = 1;
}
else {
    $posisi = ($halaman-1) * $batas;
}

$query = "SELECT * FROM tamu LIMIT $posisi,$batas ";
$tampil = mysqli_query($konek, $query);

echo "<table>
<tr><th>No</th><th>Nama</th><th>E-mail</th><th>Pesan</th></tr></table>";

$no = $posisi+1;
while ($data=mysqli_fetch_array($tampil)){
    echo "<tr>
    <td>$no</td>
    <td>$data[nama]</td>
    <td>$data[email]</td>
    <td>$data[pesan]</td>
    </tr>";
    $no++;
}
echo "</table>";
$query2 = mysqli_query($konek, "SELECT * FROM tamu");
$jmldata = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);

echo "<br> Halaman : ";

for($i=1; $i <= $jmlhalaman; $i++)
if ($i !=$halaman){
    echo " <a href=\"paging.php?halaman=$i\">$i</a> | ";
}
else { echo "<b>$i</b> | "; }
echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
?>