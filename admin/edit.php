<?php
    include '../koneksi.php';
    $id_barang = $_GET['id_barang'];
    $query = "SELECT * FROM tb_barang WHERE id_barang = '$id_barang'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Edit Barang</title>
</head>
<body>
    <div class="container">
        <h1>Edit Pesanan</h1>
        <p>Silahkan isi form dibawah ini</p>
        <form action="edit_action.php?id_barang=<?php echo $id_barang;?>" method="POST">
        <?php
            $hasil = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($hasil)> 0) {
              while ($data = mysqli_fetch_assoc($hasil)) {
                $id_barang = $data['id_barang'];
                ?>

            <p>ID Barang</p>
            <input type="text" name="id_barang" value="<?php echo $data['id_barang'];?>" disabled>
            <p>Nama Barang</p>
            <input type="text" placeholder="Masukan nama barang" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
            <p>Harga Barang</p>
            <input type="text" placeholder="Masukan harga barang" name="harga_barang" value="<?php echo $data['harga_barang'];?>">
            <p>Ukuran</p>
            <input type="text" placeholder="Masukan ukuran" name="ukuran" value="<?php echo $data['ukuran'];?>">
            <button type="submit" name="buat_pesanan">Edit</button>

                <?php
              }
            }
        ?>
            
       </form>
    
        <div class="register"></div>
    </form>
</body>
</html>