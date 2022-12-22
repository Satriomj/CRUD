<?php 
    include "db.php";
    //  query untuk mengambil semua catatan
    $result = $db->query('SELECT * FROM data_diri');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <table style="width:50%">
        <tr>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>usia</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_tlp']; ?></td>
            <td><?php echo $row['usia']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
    <a href="input.php">kembali</a>



</body>
</html>