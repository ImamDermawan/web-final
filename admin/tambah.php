<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang!</h1>
        <p>Silahkan isi form dibawah ini</p>
        <form action="tambah_action.php" method="POST">
            <p>Nama Barang</p>
            <input type="text" placeholder="Masukan nama barang" name="nama_barang">
            <p>Harga Barang</p>
            <input type="text" placeholder="Masukan harga barang" name="harga_barang">
            <p>Ukuran</p>
            <input type="text" placeholder="Masukan ukuran" name="ukuran">
            <button type="submit" name="tambah">Tambah</button>
       </form>
    </form>
</body>
</html>