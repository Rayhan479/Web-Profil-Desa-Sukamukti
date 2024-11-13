<?php
include 'layout/header.php';

if (!$_SESSION['login']) {
  header('location:login.php');
}

$id = $_GET['id'];

if (isset($_POST['edit_media']) && $_POST['edit_media'] == "SIMPAN") {
  $judul       = $_POST['judul'];
  $kategori    = $_POST['kategori'];
  $deskripsi   = $_POST['deskripsi'];
  $url_media   = $_POST['url_media'];
  $tipe_media  = $_POST['tipe_media'];
  $thumbnail   = $_FILES['thumbnail']['name'];

  // Jika thumbnail diunggah, pindahkan file ke folder img
  if (!empty($thumbnail)) {
    move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../img/" . $thumbnail);
    $query = $conn->prepare("UPDATE galeri SET thumbnail_media = :thumbnail WHERE id_media = :id");
    $query->execute([':thumbnail' => $thumbnail, ':id' => $id]);
  }

  // Perbarui data media lainnya
  $query = $conn->prepare("UPDATE galeri SET judul_media = :judul, deskripsi_media = :deskripsi, id_kategori = :kategori, url_media = :url_media, tipe_media = :tipe_media WHERE id_media = :id");
  $query->execute([
    ':judul' => $judul,
    ':deskripsi' => $deskripsi,
    ':kategori' => $kategori,
    ':url_media' => $url_media,
    ':tipe_media' => $tipe_media,
    ':id' => $id
  ]);

  if ($query) {
    header('location:list_media.php');
  }
}

// Ambil data media berdasarkan id
$result = $conn->prepare("SELECT * FROM galeri WHERE id_media = :id");
$result->execute([':id' => $id]);
$row = $result->fetch(PDO::FETCH_ASSOC);

// Ambil data kategori
$kategori = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC", PDO::FETCH_ASSOC);
?>

<div class="judul_section">
  <h1>Edit Media</h1>
  <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="textbox black">
    <label for="judul">Judul Media</label>
    <input id="judul" type="text" name="judul" value="<?= $row['judul_media']; ?>"><br>
  </div>

  <div class="textbox black">
    <label for="kat">Kategori</label>
    <div class="styled-select">
      <select id="kat" name="kategori">
        <?php while ($kat = $kategori->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?= $kat['id_kategori']; ?>" <?php if ($row['id_kategori'] == $kat['id_kategori']) { echo "selected"; } ?>>
            <?= $kat['nama_kategori']; ?>
          </option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="textbox black">
    <label for="deskripsi">Deskripsi Media</label>
    <textarea id="deskripsi" name="deskripsi"><?= $row['deskripsi_media']; ?></textarea><br>
  </div>

  <div class="textbox black">
    <label for="url_media">URL Media</label>
    <input id="url_media" type="text" name="url_media" value="<?= $row['url_media']; ?>"><br>
  </div>

  <div class="textbox black">
    <label for="tipe_media">Tipe Media</label>
    <select id="tipe_media" name="tipe_media">
      <option value="foto" <?= ($row['tipe_media'] == 'foto') ? 'selected' : ''; ?>>Foto</option>
      <option value="video" <?= ($row['tipe_media'] == 'video') ? 'selected' : ''; ?>>Video</option>
    </select>
  </div>

  <div class="textbox black">
    <label for="img">Thumbnail</label>
    <input id="img" type="file" name="thumbnail">
  </div>

  <input type="submit" name="edit_media" value="SIMPAN" class="btn">
</form>

<?php require 'layout/footer.php'; ?>
