<?php 

include "db.php";
    $id = $_GET['id'];
    $nama=$_POST['nama'];
    $no_tlp=$_POST['no_tlp'];
    $usia=$_POST['usia'];
    $db->query("UPDATE data_diri Set nama='$nama', no_tlp='$no_tlp', usia='$usia' WHERE id = $id");
    header('location: tampil.php');
?>