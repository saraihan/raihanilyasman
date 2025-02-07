<h3>Edit Buku Tamu</h3>

<?php
$konek = mysqli_connect("localhost","root","","latihan");

$id = $_GET['id'];

$edit = "SELECT * FROM tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($konek, $edit);
$data = mysqli_fetch_array($hasil);

echo "<form method=\"get\" action=\"update_tamu.php\">
        <input type=\"hidden\" name=\"id\" value=\"$id\">
    Nama: <input type=\"text\" name=\"nama\" value=\"$data[nama]\"><br><br>
    E-mail: <input type=\"text\" name=\"email\" value=\"$data[email]\"><br><br>
    Pesan: <textarea name=\"pesan\" rows=\"5\" cols=\"30\">$data[pesan]</textarea> <br><br>
    <input type=\"submit\" value=\"edit\">
</form>";
?>