<?php
    include '../koneksi.php';
    $id_barang = $_GET['id_barang'];
    $query ="DELETE FROM tb_barang WHERE id_barang = '$id_barang'";
    $berhasil_hapus = mysqli_query($koneksi, $query);
 
    if($berhasil_hapus){
        echo"
        <script>
        alert('Pesanan Berhasil Dihapus')
        window.location = 'dashboard.php'
        </script>";
 
    } else {
        echo"
        <script>
        alert('Pesanan Gagal Dihapus!')
        window.location = 'dashboard.php'
        </script>";
    }
?>