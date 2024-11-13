<?php
require 'layout/header.php';

$query  = $conn->query("SELECT kategori.* ,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 3");
$data   = $query->fetch();
?>

    <!-- <div class="jumbotron">
  <div class="inner">
    <h1>Desa Sukamukti</h1>
    <h3>Kecamatan Cilawu, Kabupaten Garut</h3>
    <h3> <i class="fa fa-phone"></i> (022)xxxxxxxx &nbsp;&nbsp;-&nbsp;&nbsp; <i class="fa fa-envelope"></i> desakesukamukti@gmail.com </h3>
  </div>
  </div> -->


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="assets\images\bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Selamat Datang Di Web Desa Sukamukti</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="assets\images\background.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Selamat Datang Di Web Desa Sukamukti</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="assets\images\bg.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Selamat Datang Di Web Desa Sukamukti</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="container">
    <div class="berita">
        <h2 class="title">Berita dan Event</h2>
        <div class="card-container">
            <?php do{ ?>
                <div class="card">
                    <a href="lihat_artikel.php?id=<?=$data['id_artikel'];?>"><img src="img/<?=$data['gambar_artikel']?>"></a>
                    <div class="card-body">
                        <h3><a href="lihat_artikel.php?id=<?=$data['id_artikel'];?>"><?=$data['judul_artikel'];?></a></h3>
                        <p><?=substr($data['isi_artikel'],0,125);?>...</p>
                    </div>
                </div>   
            <?php } while ($data = $query->fetch()); ?>                  
        </div>
        <div class="tombol_lihat mt-3">
            <a href="berita.php">Lihat Berita Lainnya... 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon">
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                </svg>
            </a>
        </div>
    </div> 
</div>




  <!-- card area start -->
  <div class="card_wrapper mt-5">
    <div class="container">
        <div class="judul_section">
            <h2>Aparatur Desa</h2>
            <hr>
        </div>
        <div class="owl-carousel slider_carousel">
            <div class="card_box">
                <img class="img-fluid w-100" src="img/pamong_1685624814-11-817946.png" alt="Abdul">
                <div class="card_text">
                    <h3>Abdul</h3>
                    <p>Kades</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-03.png" alt="Gia">
                <div class="card_text">
                    <h3>Gia</h3>
                    <p>Kadus</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-04.png" alt="Septa">
                <div class="card_text">
                    <h3>Septa</h3>
                    <p>Sekdes</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-05.png" alt="Zaenal">
                <div class="card_text">
                    <h3>Zaenal</h3>
                    <p>Kaur Umum</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-01.png" alt="Cio">
                <div class="card_text">
                    <h3>Cio</h3>
                    <p>Kaur Bendahara</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-03.png" alt="Rezky">
                <div class="card_text">
                    <h3>Rezky</h3>
                    <p>Kasi Pelayanan</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-04.png" alt="Nizar">
                <div class="card_text">
                    <h3>Nizar</h3>
                    <p>Alamat lengkap</p>
                </div>
            </div>
            <div class="card_box">
                <img class="img-fluid w-100" src="img/slider-05.png" alt="Ahsan">
                <div class="card_text">
                    <h3>Ahsan</h3>
                    <p>Kadus II</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- all js here -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        
        function slider_carouselInit() {
    $('.owl-carousel.slider_carousel').owlCarousel({
        dots: false,
        loop: true,
        margin: 30,
        stagePadding: 2,
        autoplay: false,
        nav: true,
        navText: [
            `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 24px; height: 24px;"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>`,
            `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 24px; height: 24px;"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>`
        ],
        autoplayTimeout: 1500,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            992: {
                items: 5
            }
        }
    });
}
slider_carouselInit();


    </script>

<div class="about">
<div class="container  mt-5">
    <div class="row ">
        <div class="col-md-6 col-sm-6">
            <!-- Video YouTube -->
            <div class="video-wrapper">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/S3torKwBCOE?si=ADBfqlYczM8x7bn-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <!-- Deskripsi tentang Desa -->
            <div class="description-wrapper">
                <h2>Tentang Desa Sukamukti</h2>
                <p>
                    Desa Sukamukti adalah sebuah desa yang terletak di Kecamatan Cilawu, Kabupaten Garut. Desa ini dikenal dengan pemandangan alamnya yang indah serta budaya lokal yang kaya. Penduduk desa sebagian besar bekerja di sektor pertanian, peternakan, dan kerajinan tangan. Desa Sukamukti juga memiliki berbagai potensi wisata yang terus dikembangkan untuk menarik wisatawan, baik lokal maupun mancanegara.
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="data-penduduk">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-12 judul_section">
        <h2>Data Penduduk</h2>
      </div>
      <div class="col-md-4 data-item">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="50" height="50">
            <path fill="#ffffff" d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304l0 128c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-223.1L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6l29.7 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128-16 0z"/>
          </svg>
        </i>
        <h3 class="counter" data-target="1360">0</h3>
        <p>Laki-Laki</p>
      </div>
      <div class="col-md-4 data-item">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="50" height="50">
            <path fill="#ffffff" d="M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM88 384l-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2c20.3-33.7 56.7-54.3 96-54.3l11.6 0c39.3 0 75.7 20.6 96 54.3l53.6 89.2c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9l-33.9-56.3L265 362.9c3.5 10.4-4.3 21.1-15.2 21.1L232 384l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-16 0 0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96z"/>
          </svg>
        </i>
        <h3 class="counter" data-target="1231">0</h3>
        <p>Perempuan</p>
      </div>
      <div class="col-md-4 data-item">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="50" height="50">
            <path fill="#ffffff" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
        </i>
        <h3 class="counter" data-target="2600">0</h3>
        <p>Total Penduduk</p>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
  
    counters.forEach(counter => {
      counter.innerText = '0';
  
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
  
        const increment = target / 100; // Adjust the speed of the counter
  
        if(count < target) {
          counter.innerText = `${Math.ceil(count + increment)}`;
          setTimeout(updateCounter, 20); // Adjust the speed of the counter
        } else {
          counter.innerText = target;
        }
      };
  
      updateCounter();
    });
  });
  
</script>






<div class="container mt-5">
  <div class="row peta">
      <div class="col-md-6 col-sm-6">
          <div class="card">
              <div class="card-header text-center">
                  <span class="custom-text">PETA WILAYAH DESA</span>
              </div>
              <div class="card-body">
                  <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63321.02485691009!2d107.83703990838468!3d-7.290338045814316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68af7597b08751%3A0x20fd303a95ba211!2sSukamukti%2C%20Kec.%20Cilawu%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1722926165930!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6">
          <div class="card">
              <div class="card-header text-center">
                  <span class="custom-text">PETA LOKASI KANTOR</span>
              </div>
              <div class="card-body">
                  <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.729670498771!2d107.88756747404115!3d-7.271571771450468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68afb911ecc281%3A0xc2c5717066184b5!2sKantor%20Desa%20Sukamukti!5e0!3m2!1sid!2sid!4v1722926395804!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

  

  
    <?php require 'layout/footer.php'; ?>






  