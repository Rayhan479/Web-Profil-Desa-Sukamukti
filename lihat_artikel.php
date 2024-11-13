<?php
include 'layout/header.php';

$id=$_GET['id'];
$query  = $conn->query("SELECT kategori.*,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori WHERE artikel.id_artikel = '$id'", PDO::FETCH_ASSOC);
$data   = $query->fetch();

?>
<!-- <div class="container">
  <div class="content">
    <div class="artikel-section">
      <div class="judul">
        <h2><?=$data['judul_artikel'];?></h2>
      </div>
      <div class="attr">
        <p>
          <?=tanggal($data['tanggal_artikel']);?>  /
          <a href="kategori.php?id=<?=$data['id_kategori'];?>">
            <?=$data['nama_kategori'];?>
          </a>
        </p>
      </div>
      <div class="imgartikel">
        <img src="img/<?=$data['gambar_artikel'];?>" class="col-md-6 float-md-end mb-3 ms-md-3">
      </div>
      <div class="isi">
        <p><?=$data['isi_artikel'];?></p>
      </div>
    </div> -->

   <div class="container">
   <div class="artikel-section">
    <div class="judul">
      <h2><?=$data['judul_artikel'];?></h2>
    </div>
    <div class="attr">
      <p>
        <?=tanggal($data['tanggal_artikel']);?>  /
        <a href="kategori.php?id=<?=$data['id_kategori'];?>">
          <?=$data['nama_kategori'];?>
        </a>
      </p>
    </div>
    <div class="img-artikel">
      <img src="img/<?=$data['gambar_artikel'];?>" class="col-md-6 float-md-start " alt="...">
    </div>
    

    <div class="isi">
          <p><?=$data['isi_artikel'];?></p>
    </div>
    </div>
   </div>
  

<?php require 'layout/footer.php'; ?>
