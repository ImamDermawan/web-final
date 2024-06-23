<?php
    include '../koneksi.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username_admin'];
        $password = $_POST['password_admin'];

        $query = "SELECT * FROM tb_admin WHERE username_admin = '$username' AND password_admin = '$password'";
        $sql = mysqli_query($koneksi, $query);

        if ($sql -> num_rows > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['username_admin'] = $row['username_admin'];
            ?>
            <script>
                alert("Login Berhasil!");
                window.location = 'dashboard.php';
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Username atau Password anda salah! silahkan coba lagi.");
                window.location = 'login.php';
            </script>
            <?php
        }
    }
?>