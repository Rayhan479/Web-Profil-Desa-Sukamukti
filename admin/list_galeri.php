<?php
include 'layout/header.php';

if (!$_SESSION['login']) {
    header('location:login.php');
}

// Query untuk mendapatkan data dari tabel galeri, menggunakan nama kategori dari tabel kategori jika ada
$result = $conn->query("
    SELECT kategori.nama_kategori, galeri.*
    FROM galeri 
    LEFT JOIN kategori ON galeri.id_kategori = kategori.id_kategori 
    ORDER BY galeri.id_media DESC
", PDO::FETCH_ASSOC);

$row = $result->fetch();
?>

<div class="judul_section">
  <h1>Daftar Galeri</h1>
  <hr>
</div>

<a href="tambah_galeri.php" class="tombolplus">
  <i class="fa fa-plus"></i> Tambah Gambar/Video
</a>
<br>

<table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Judul Media</th>
      <th>Deskripsi</th>
      <th>Kategori</th>
      <th>Tanggal</th>
      <th>Thumbnail</th>
      <th>Media</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $num = 0; 
    do { 
        $num++; 
    ?>
    <tr>
      <td><?=$num;?></td>
      <td><?=$row['judul_media'];?></td>
      <td><?=$row['deskripsi_media'];?></td>
      <td><?=$row['nama_kategori'] ? $row['nama_kategori'] : 'Tanpa Kategori';?></td>
      <td><?=date('d-m-Y', strtotime($row['tanggal_media']));?></td>
      <td><img src="../img/<?=$row['thumbnail_media'];?>" alt="<?=$row['judul_media'];?>" style="width:100px;"></td>
      <td>
        <?php if ($row['tipe_media'] == 'video') { ?>
          <a href="<?=$row['url_media'];?>" target="_blank">Lihat Video</a>
        <?php } else { ?>
          <img src="../img/<?=$row['url_media'];?>" alt="<?=$row['judul_media'];?>" style="width:100px;">
        <?php } ?>
      </td>
      <td>
        <a href="edit_galeri.php?id=<?=$row['id_media'];?>" class="edit">Edit</a> -
        <a href="hapus_galeri.php?id=<?=$row['id_media'];?>" class="delete" onclick="return confirm('Yakin ingin menghapus media ini?')">Hapus</a>
      </td>
    </tr>
    <?php } while ($row = $result->fetch()); ?>
  </tbody>
</table>

<?php
include 'layout/footer.php';
?>
