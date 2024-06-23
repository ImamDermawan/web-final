<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Admin</title>
        <style>
            body {
                margin-top: 100px;
                text-align: center;
            }

            table {
                width: 1000px;
                border: 1px solid;
                margin: 0 auto;
            }

            .button {
                margin-top: 16px;
                background-color: #04AA6D;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            .second_button {
                margin-top: 16px;
                background-color: #000;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

            .button_action {
                background-color: #3652AD;
                color: white;
                padding: 8px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

        </style>
    </head>
    <body>
        <table border="1px">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <?php
                include '../koneksi.php';
                $query = "SELECT * FROM tb_barang";

                $hasil = mysqli_query($koneksi, $query);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $id_barang = $data['id_barang'];
                    ?>
                    <tbody>
                    <tr>
                        <td align="center"><?php echo $data["id_barang"]; ?></td>
                        <td align="center"><?php echo $data["nama_barang"]; ?></td>
                        <td align="center"><?php echo $data["harga_barang"]; ?></td>
                        <td align="center"><?php echo $data["ukuran"]; ?></td>
                        <td>
                            <a href="edit.php?id_barang=<?php echo $id_barang;?>" class="button_action" role="button">Edit</a>
                            <a href="hapus_action.php?id_barang=<?php echo $id_barang;?>" class="button_action" style="background-color: red;" role="button">Hapus</a>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                }
            ?>
        </table>
        <a class="button" href="tambah.php" role="button">Tambah Data</a>
        <a class="second_button" href="../index.php" role="button">Kembali</a>
    </body>
</html>