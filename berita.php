<?php
require 'layout/header.php';

// Tentukan jumlah berita per halaman
$news_per_page = 4;

// Tentukan halaman yang sedang diakses, default adalah halaman 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Hitung offset untuk query
$offset = ($page - 1) * $news_per_page;

// Query untuk mengambil berita sesuai dengan halaman yang sedang diakses
$query  = $conn->prepare("SELECT kategori.*, artikel.* 
                          FROM artikel 
                          LEFT JOIN kategori ON artikel.id_kategori = kategori.id_kategori 
                          ORDER BY artikel.id_artikel DESC 
                          LIMIT :limit OFFSET :offset");
$query->bindValue(':limit', $news_per_page, PDO::PARAM_INT);
$query->bindValue(':offset', $offset, PDO::PARAM_INT);
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// Hitung total berita untuk keperluan pagination
$total_articles = $conn->query("SELECT COUNT(*) FROM artikel")->fetchColumn();
$total_pages = ceil($total_articles / $news_per_page);
?>

<div class="container">
  <div class="content">
    <div class="berita-page">
    <img src="img/berita.png" class="img-fluid" alt="...">
      <div class="judul_section">
        <h1>BERITA</h1>
        <hr>
      </div>
      <div class="berita_section">
        <?php foreach ($articles as $data) { ?>
          <div class="grid">
            <div class="cover_grid_news">
              <img src="img/<?=$data['gambar_artikel']?>">
            </div>
            <div class="read-more">
              <div class="judul">
                <h3><a href="lihat_artikel.php?id=<?=$data['id_artikel'];?>"><?=$data['judul_artikel'];?></a></h3>
              </div>
              <div class="attr">
                <p>
                  <?=tanggal($data['tanggal_artikel']);?> /
                  <a href="kategori.php?id=<?=$data['id_kategori'];?>">
                    <?=$data['nama_kategori'];?>
                  </a>
                </p>
              </div>
              <div class="isi">
                <p><?=substr($data['isi_artikel'], 0, 125);?>...</p>
              </div>
              <div class="tombol_lihat">
                <a href="lihat_artikel.php?id=<?=$data['id_artikel'];?>">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-end">
        <li class="page-item <?=($page <= 1) ? 'disabled' : ''?>">
          <a class="page-link" href="?page=<?=($page - 1)?>">Sebelumnya</a>
        </li>
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li class="page-item <?=($page == $i) ? 'active' : ''?>">
                <a class="page-link" href="?page=<?=$i?>"><?=$i?></a>
            </li>
        <?php endfor; ?>
        <li class="page-item <?=($page >= $total_pages) ? 'disabled' : ''?>">
          <a class="page-link" href="?page=<?=($page + 1)?>">Selanjutnya</a>
        </li>
    </ul>
    
  </div>
</div>

<?php require 'layout/footer.php'; ?>
