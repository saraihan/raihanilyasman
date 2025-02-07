<?php
function combohari($namahari) {
    $hari = array("minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu");

    echo "<select name=\"$namahari\">";
    for ($i=0; $i <= 6 ; $i++) { 
        echo "<option value=\"$hari[$i]\">$hari[$i]</option>";
    }
    echo "</select>";
}
?>