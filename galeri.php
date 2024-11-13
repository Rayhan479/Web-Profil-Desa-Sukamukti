<?php
include 'layout/header.php';

// Tentukan jumlah media per halaman (foto/video)
$media_per_page = 8;

// Tentukan halaman yang sedang diakses, default adalah halaman 1
$page_foto = isset($_GET['page_foto']) && is_numeric($_GET['page_foto']) ? (int)$_GET['page_foto'] : 1;
$page_video = isset($_GET['page_video']) && is_numeric($_GET['page_video']) ? (int)$_GET['page_video'] : 1;

// Hitung offset untuk query
$offset_foto = ($page_foto - 1) * $media_per_page;
$offset_video = ($page_video - 1) * $media_per_page;

// Query untuk mengambil foto sesuai dengan halaman yang sedang diakses
$query_foto = $conn->prepare("SELECT id_media, judul_media, deskripsi_media, thumbnail_media, tipe_media, tanggal_media 
                          FROM galeri 
                          WHERE tipe_media = 'foto'
                          ORDER BY tanggal_media DESC 
                          LIMIT :limit OFFSET :offset");
$query_foto->bindValue(':limit', $media_per_page, PDO::PARAM_INT);
$query_foto->bindValue(':offset', $offset_foto, PDO::PARAM_INT);
$query_foto->execute();
$fotos = $query_foto->fetchAll(PDO::FETCH_ASSOC);

// Hitung total foto untuk keperluan pagination
$total_fotos = $conn->query("SELECT COUNT(*) FROM galeri WHERE tipe_media = 'foto'")->fetchColumn();
$total_pages_foto = ceil($total_fotos / $media_per_page);

// Query untuk mengambil video sesuai dengan halaman yang sedang diakses
$query_video = $conn->prepare("SELECT id_media, judul_media, deskripsi_media, url_media, thumbnail_media, tipe_media, tanggal_media 
                               FROM galeri 
                               WHERE tipe_media = 'video'
                               ORDER BY tanggal_media DESC 
                               LIMIT :limit OFFSET :offset");
$query_video->bindValue(':limit', $media_per_page, PDO::PARAM_INT);
$query_video->bindValue(':offset', $offset_video, PDO::PARAM_INT);
$query_video->execute();
$videos = $query_video->fetchAll(PDO::FETCH_ASSOC);

// Hitung total video untuk keperluan pagination
$total_videos = $conn->query("SELECT COUNT(*) FROM galeri WHERE tipe_media = 'video'")->fetchColumn();
$total_pages_video = ceil($total_videos / $media_per_page);
?>
<!-- galeri section start -->
<div class="container">
    <img src="img/banner-galeri.png" class="img-fluid" alt="">
    <div class="galeri-page">
        <h2 class="title">Galeri Foto</h2>
        <hr>
        <div class="card-container">
            <?php 
            $fotos = array_reverse($fotos); // Membalikkan urutan foto
            foreach ($fotos as $data) { ?>
                <div class="card">
                    <a data-fancybox data-src="img/<?=$data['thumbnail_media']?>" data-caption="">
                        <img src="img/<?=$data['thumbnail_media']?>" width="200" alt="" />
                        <div class="zoom-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM184 296c0 13.3 10.7 24 24 24s24-10.7 24-24l0-64 64 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-64 0 0-64c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 64-64 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l64 0 0 64z"/></svg>
                        </div>
                    </a>
                    <div class="card-body">
                        <h3><?=$data['judul_media'];?></h3>
                        <p><?=$data['deskripsi_media'];?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Pagination Foto -->
        <ul class="pagination pagination-lg justify-content-center">
            <?php for ($i = 1; $i <= $total_pages_foto; $i++): ?>
                <li class="page-item <?=($page_foto == $i) ? 'active' : ''?>">
                    <a class="page-link" href="?page_foto=<?=$i?>"><?=$i?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </div> 
</div>


<div class="container">
    <h2 class="title-gallery">Galeri Video</h2>
    <hr>
    <div class="video-gallery">
        <?php foreach ($videos as $video) { ?>
        <div class="video-card">
            <div class="thumbnail">
                <a href="<?=$video['url_media']?>" data-fancybox="video-gallery">
                    <img src="img/<?=$video['thumbnail_media']?>" width="200px">
                </a>
                <div class="play-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                </div>
            </div>
            <p class="modal-title"><?=$video['judul_media']?></p>
        </div>
        <?php } ?>
    </div>
    
    <!-- Pagination Video -->
    <ul class="pagination pagination-lg justify-content-center mt-5">
        <?php for ($i = 1; $i <= $total_pages_video; $i++): ?>
            <li class="page-item <?=($page_video == $i) ? 'active' : ''?>">
                <a class="page-link" href="?page_video=<?=$i?>"><?=$i?></a>
            </li>
        <?php endfor; ?>
    </ul>
</div>

<!-- Fancybox JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind('[data-fancybox]', {
        // Custom options
    });    
</script>

<?php require 'layout/footer.php'; ?>
