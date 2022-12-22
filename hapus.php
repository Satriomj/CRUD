<?php 

include "db.php";
    $id = $_GET['id'];
    $db->query("DELETE FROM data_diri  WHERE id = $id");
    header('location: tampil.php');
?>