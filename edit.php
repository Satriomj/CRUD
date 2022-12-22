<?php
    include "db.php";
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM data_diri WHERE id = $id");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while ($row = $result->fetch_assoc()) : ?>
        <form action="simpanedit.php?id=<?php echo $row['id']; ?>" method="POST">
        <label for="nama">Nama Anda</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <label for="nomor">Nomor Telepon</label><br>
        <input type="text" id="nomor" name="no_tlp" value="<?php echo $row['no_tlp']; ?>"><br><br>
        <label for="usia">usia</label><br>
        <input type="text" id="usia" name="usia" value="<?php echo $row['usia']; ?>"><br><br>
        <button type="submit">Tambah</button>
        </form>
<?php endwhile ?>
    
</body>
</html>