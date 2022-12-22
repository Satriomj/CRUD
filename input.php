<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="buat.php" method="POST">
        <label for="nama">Nama Anda</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="nomor">Nomor Telepon</label><br>
        <input type="text" id="nomor" name="nomor"><br>
        <label for="usia">usia</label><br>
        <input type="text" id="usia" name="usia"><br><br>
        <button type="submit">Tambah</button>
    </form>
    <br><br>
    <a href="tampil.php">lihat input data</a>
</body>
</html>