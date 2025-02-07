METHOD GET
<form method="get" action="method.php">
    <input type="text" name="nama">
    <input type="submit" name="proses" value="Proses">
</form>

<?php
if (isset ($_GET['proses'])) {
    $nama = $_GET['nama'];
    echo "nama : <b>$nama</b>";
}
?>

<br><hr><hr>

METHOD POST

<form method="post" action="method.php">
    <input type="text" name="nama">
    <input type="submit" name="proses" value="Proses">
</form>

<?php
if (isset ($_POST['proses'])) {
    $nama = $_POST['nama'];
    echo "nama : <b>$nama</b>";
}
?>