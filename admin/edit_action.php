<?php
    include '../koneksi.php';
    $id_barang = $_GET['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $ukuran = $_POST['ukuran'];

    echo $nama_barang;
    $query = "UPDATE tb_barang SET nama_barang = '$nama_barang', harga_barang = '$harga_barang', ukuran = '$ukuran' WHERE tb_barang.id_barang = '$id_barang'";
    if($berhasil = mysqli_query($koneksi, $query)){
        ?>
        <script>
            alert('Pesanan Berhasil Diedit')
            window.location = 'dashboard.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Pesanan Gagal Diedit')
        </script>
        <?php
    }
?>