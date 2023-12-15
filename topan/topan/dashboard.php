<?php
	include 'db.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Typhoon Disaster</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Typhoon<span>Disaster</span>.</a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#mitigasi">Mitigasi</a>
            <a href="#riwayat">Riwayat</menu></a>
            <a href="#berita">Berita</a>
            <a href="#peta">Peta</a>
            <a href="login.php">Login</a>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
    <section class="hero" id="home">
        <div class="container">
            <div class="box">
      <main class="content">
        <h1>Selamat Datang <span>di</span> Website <span>Bencana Topan</span></h1>
        <p>Apakah anda tau apa itu bencana topan dan bagaimana cara mengatasinya?</p>
        <a href="#selengkapnya" class="cta">selengkapnya</a>
      </main>
      </div>
      </div>
    </section>
    <!-- hero section end -->
    <!--selengkapnya-->
    <section id="selengkapnya" class="selengkapnya">
        <h2><span>seleng</span>kapnya</h2>
  
        <div class="row">
          <div class="selengkapnya-img">
          <img src="img/topandesc.png" alt="" style="width: 80%;">   
          </div>
          <div class="content">
            <h3>Apa itu Topan?</h3>
            <p>Topan adalah istilah untuk pusaran siklon tropis dewasa yang terbentuk antara Meridian timur ke-100 dan ke-180 di belahan utara Bumi. Kawasan ini dinamakan sebagai Cekungan Pasifik Barat Laut, yang merupakan kawasan siklon tropis teraktif di Bumi, dimana hampir sepertiga dari siklon tropis tahunan di dunia terbentuk di kawasan ini. Topan merupakan angin kencang dengan kecepatan angin 120 km/jam atau lebih yang terjadi di khatulistiwa. Angin topan disebabkan oleh perbedaan tekanan dalam suatu sistem cuaca dengan jarak minimal 500 km dari garis khatulistiwa. Angin paling kencang yang terjadi di daerah tropis ini umumnya berpusar dengan radius ratusan kilometer di sekitar daerah sistem tekanan rendah yang ekstrem dengan kecepatan sekitar 20 Km/jam. Angin topan biasa terjadi saat pergantian musim dari musim panas ke musim gugur.</p>
          </div>
        </div>
      </section>

    <!-- mitigasi section start -->
    <section id="mitigasi" class="mitigasi">
      <h2><span>Miti</span>gasi</h2>

      <div class="row">
        <div class="mitigasi-img">
        <img src="img/mtg.png" alt="" style="width: 80%">
        </div>   
        <div class="content">
          <h3>Apa saja mitigasi untuk menangani bencana topan?</h3>
          <p>Mitigasi adalah upaya yang dilakukan untuk mengurangi risiko bencana. Hal terkait mitigasi juga diatur dalam UU Nomor 24 Tahun 2007. Undang-Undang tersebut juga memuat definisi tentang mitigasi.
            Menurut UU 24 Tahun 2007, mitigasi adalah serangkaian upaya untuk mengurangi resiko bencana, baik melalui pembangunan fisik maupun penyadaran dan peningkatan kemampuan menghadapi ancaman bencana.</p>
          <br><p>Mitigasi yang dapat dilakukan adalah sebagai berikut:</p>
          <h3>1. Be Updated</h3>
          <p>Dengarkan berita cuaca lokal terbaru dan peringatan melalui radio bertenaga baterai atau aplikasi ponsel pintar</p>
          <h3>2. Berlatih Evakuasi</h3>
          <p>Berlatihlah latihan kesiapsiagaan bencana tornado atau topan secara teratur bersama keluarga atau teman anda untuk memastikan semua orang tahu apa yang harus dilakukan saat terjadi tornado atau topan</p>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- riwayat section start -->
    <section id="riwayat" class="riwayat">
      <h2><span>Riwayat</span> Kejadian</h2>
      <p>Berikut adalah daftar riwayat kejadian bencana topan yang pernah terjadi di dalam negri maupun luar negri</p>
      <div class="row">
        <div class="riwayat-card">
          <img src="img/tbangladesh.jpeg" alt="riwayat 1" class="riwayat-card-img" width="500" height="300">
          <h3 class="riwayat-card-title">-Daulatpur-Saturia Tornado, Bangladesh (1989) - <br>-1.300 korban jiwa-</h3>
          <br>
        </div>
        <div class="riwayat-card">
          <img src="img/t1925.jpeg" alt="riwayat 1" class="riwayat-card-img" width="500" height="300">
          <h3 class="riwayat-card-title">-Tri-State Tornado (1925) - <br>-695 korban jiwa-</h3>
          <br>
        </div>
        <div class="riwayat-card">
          <img src="img/t1840.jpeg" alt="riwayat 1" class="riwayat-card-img" width="500" height="300">
          <h3 class="riwayat-card-title">-The Great Natchez Tornado (1840) - <br>-317 korban jiwa-</h3><br>
          
        </div>
        <div class="riwayat-card">
          <img src="img/t1896.jpeg" alt="riwayat 1" class="riwayat-card-img" width="500" height="300">
          <h3 class="riwayat-card-title">-The St. Louis-East St. Louis Tornado (1896) - <br>-255 korban jiwa-</h3><br>
    
        </div>
      </div>
    </section>    
    <!-- riwayat section end -->

   <!-- berita section start -->
<section id="berita" class="berita">
    <h2><span>Berita</span> Terbaru</h2>
    <p>berikut adalah data terbaru tentang terjadinya bencana topan dan sejenisnya</p>
    <div class="row">
        <?php
        $berita = mysqli_query($conn, "SELECT * FROM tb_berita ORDER BY berita_id DESC LIMIT 8");
        if (mysqli_num_rows($berita) > 0) {
            while ($row = mysqli_fetch_array($berita)) {
        ?>
                <div class="col-4">
                    <img src="img/<?php echo $row['berita_img']; ?>" alt="<?php echo $row['judul']; ?>" style="width: 100%;"><br>
                    <h3 class="judul"><?php echo $row['judul']; ?></h3>
                    <p class="deskripsi"><?php echo $row['berita_desc']; ?></p>
                </div>
        <?php }
        } else { ?>
            <p>Berita tidak ada</p>
        <?php } ?>
    </div>
</section>


    </div>
</section>

<!-- peta section start -->
<section id="peta" class="peta">
      <h2><span>Peta</span> Cuaca</h2>
      <p>Berikut adalah Peta cuaca yang membantu untuk melihat kondisi kemungkinan terjadi Badai serta Topan</p>
      <iframe width="1080" height="350" src="https://embed.windy.com/embed2.html?lat=-4.040&lon=114.346&detailLat=-6.337&detailLon=107.249&width=950&height=350&zoom=5&level=surface&overlay=wind&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
    </section>    
    <!-- peta section end -->

    <!-- contact section end -->

    <!-- footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#mitigasi">mitigasi</a>
        <a href="#riwayat">riwayat</a>
        <a href="#berita">berita</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">kelompok7</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- footer end -->
  </body>
</html>