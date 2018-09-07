<?php
require 'library.php';


$tuoi = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tuoi = lay_email($_POST['ten']);

    if ($tuoi === null) {
        $tuoi = "Khong tim duoc tuoi";
    }

    /* echo "Chay vao day roi";*/
}
?>


<form method="post" >
    Moi ban nhap ten vao
    <br>
    <input type="text" name="ten">
    <input type="submit" value="Sumbit Me!">
</form>

Tuoi cua ban la : <?php echo $tuoi ?>

