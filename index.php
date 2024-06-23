<!DOCTYPE html>
<html>
  <head>
    <title>Penart Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
      .w3-row-padding img {margin-bottom: 12px}
      .w3-sidebar {width: 120px;background: #222;}
      #main {margin-left: 120px}
      @media only screen and (max-width: 600px) {#main {margin-left: 0}}
      img.tampilan-image {
          width: 100%;
          max-width: 600px;
          height: auto;
      }
    </style>
  </head>
  <body class="w3-black">

  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <img src="assets/Untitled-1.png" style="width:100%">
    <a href="#tampilan" class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="showSection('tampilan')">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>Beranda</p>
    </a>
    <a href="#profil" class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="showSection('profil')">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>Profil</p>
    </a>
    <a href="#desain-produk" class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="showSection('desain-produk')">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>Desain Produk</p>
    </a>
    <a href="#kontak" class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="showSection('kontak')">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>Kontak</p>
    </a>

    <!-- login admin -->
    <a href="admin/login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-sign-in w3-xxlarge"></i>
      <p>Login</p>
    </a>

  </nav>

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-dark-grey w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#tampilan" class="w3-bar-item w3-button" style="width:25% !important" onclick="showSection('tampilan')">Tampilan</a>
      <a href="#profil" class="w3-bar-item w3-button" style="width:25% !important" onclick="showSection('profil')">Profil</a>
      <a href="#desain-produk" class="w3-bar-item w3-button" style="width:25% !important" onclick="showSection('desain-produk')">Desain Produk</a>
      <a href="#kontak" class="w3-bar-item w3-button" style="width:25% !important" onclick="showSection('kontak')">Kontak</a>
    </div>
  </div>

  <div class="w3-padding-large" id="main">
    <div id="tampilan" class="section">
      <header class="w3-container w3-padding-32 w3-center w3-black">
        <h1><img src="assets/logo.png" alt="threejs-project" class="w3-image tampilan-image"></h1>
      </header>
    </div>

    <div id="profil" class="section" style="display:none">
      <div class="w3-content w3-justify w3-text-grey w3-padding-64">
        <h2 class="w3-text-light-grey">Penart Project</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>Selamat datang di Penart Project! Kami adalah tempatnya untuk mendapatkan baju yang benar-benar sesuai dengan gaya dan kepribadian Anda.</p>
        <p>*Desain Kustom: Kami menghadirkan pengalaman desain yang unik. Anda bisa menciptakan pakaian yang sesuai dengan visi Anda sendiri. Dari pemilihan warna hingga gaya potongan, kami memastikan setiap detail mencerminkan keunikan Anda.</p>
        <p>*Kualitas Terbaik: Kami bangga dengan kualitas tinggi bahan dan keterampilan pembuatan yang kami tawarkan. Setiap potongan pakaian kami dijahit dengan teliti untuk memberikan produk akhir yang luar biasa.</p>
        <p>*Pengalaman Pelanggan yang Memuaskan: Kepuasan Anda adalah prioritas utama kami. Tim kami siap membantu Anda melalui setiap langkah proses pembuatan, dari konsep awal hingga penerimaan produk akhir.</p>
        <p>* Ukuran yang Sesuai: Kami memahami bahwa setiap tubuh unik. Dengan layanan kustomisasi Anda bisa mendapatkan pakaian yang pas dan nyaman sesuai dengan ukuran tubuh Anda.</p>   
        <p>* Layanan Korporat: Selain itu, kami juga menyediakan layanan desain khusus untuk perusahaan atau acara khusus. Jadikan tim kami mitra Anda dalam menghasilkan pakaian yang sesuai dengan identitas merek atau tema acara Anda.</p>  
        <p>* Kunjungi Toko Kami: Jelajahi koleksi kami dan jadilah bagian dari pengalaman desain yang tak terlupakan. Kunjungi toko kami di (Alamat) atau hubungi kami untuk mendiskusikan kebutuhan desain kustom Anda.</p>
        <p>Bersiaplah untuk tampil beda dengan baju yang dibuat khusus hanya untuk Anda di Penart Project </p>

        <h3 class="w3-text-light-grey">Keahlian</h3>
        <hr style="width:200px" class="w3-opacity">
      <p class="w3-wide">Desain Grafis</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">Desain Vector</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Corel Draw</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:80%"></div>
      </div><br>
      </div>
    </div>

    <div id="desain-produk" class="section" style="display:none">
      <div class="w3-padding-64 w3-content">
        <h2 class="w3-text-light-grey">Produk</h2>
        <hr style="width:200px" class="w3-opacity">
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="assets/satu.jpeg" style="width:100%">
            <img src="assets/dua.jpeg" style="width:100%">
            <img src="assets/tiga.jpeg" style="width:100%">
          </div>
          <div class="w3-half">
            <img src="assets/empat.jpeg" style="width:100%">
            <img src="assets/lima.jpeg" style="width:100%">
            <img src="assets/enam.jpeg" style="width:100%">
          </div>
        </div>
        <div class="w3-padding-16 w3-content w3-text-grey" id="price-list">
          <h3 class="w3-text-light-grey">Daftar Harga</h3>

          <table style="width:1000px" border="1px">
          <thead>
              <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Ukuran</th>
              </tr>
          </thead>

          <?php
              include 'koneksi.php';
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
                  </tr>
                  </tbody>
                  <?php
              }
          ?>
          </table>
        </div>
      </div>
    </div>

    <div id="kontak" class="section" style="display:none">
      <div class="w3-padding-64 w3-content w3-text-grey">
        <h2 class="w3-text-light-grey">Kontak Yang Dapat Dihubungi</h2>
        <hr style="width:200px" class="w3-opacity">
        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Kendari, Indonesia</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> 085297349685</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> penartproject2020@gmail.com</p>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script>
  function showSection(sectionId) {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
      section.style.display = 'none';
    });
    document.getElementById(sectionId).style.display = 'block';
  }
  </script>

  </body>
</html>