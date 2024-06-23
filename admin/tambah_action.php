<?php
    include '../koneksi.php';

    $namaBarang = $_POST["nama_barang"];
    $hargaBarang = $_POST["harga_barang"];
    $ukuran = $_POST["ukuran"];
    
    $query = "INSERT INTO tb_barang (nama_barang, harga_barang, ukuran) VALUES ('$namaBarang', '$hargaBarang', '$ukuran');";
    $sql = mysqli_query($koneksi, $query);
      
?>

<script>
    alert("Berhasil Memesan!");
    window.location = "dashboard.php";
</script>