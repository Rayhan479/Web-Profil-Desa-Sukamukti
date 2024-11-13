<?php
include 'layout/header.php';

if (!$_SESSION['login']) {
    header('location:login.php');
}

if (isset($_POST['tambah_media']) && $_POST['tambah_media'] == "TAMBAH") {
    $judul      = $_POST['judul'];
    $kategori   = $_POST['kategori'];
    $deskripsi  = $_POST['deskripsi'];
    $tipe_media = $_POST['tipe_media'];
    $tanggal    = date("Y-m-d");

    if ($tipe_media == "foto") {
        $media = $_FILES['media']['name'];
        move_uploaded_file($_FILES['media']['tmp_name'], "../img/" . $media);

        $sql = "INSERT INTO galeri (judul_media, deskripsi_media, id_kategori, tipe_media, url_media, thumbnail_media, tanggal_media) 
                VALUES (:judul, :deskripsi, :kategori, :tipe_media, :url_media, :thumbnail_media, :tanggal)";
        $query = $conn->prepare($sql);
        $query->execute([
            ':judul' => $judul,
            ':deskripsi' => $deskripsi,
            ':kategori' => $kategori,
            ':tipe_media' => $tipe_media,
            ':url_media' => $media,
            ':thumbnail_media' => $media,
            ':tanggal' => $tanggal
        ]);
    } elseif ($tipe_media == "video") {
        $url_video      = $_POST['url_video'];
        $thumbnail_video = $_FILES['thumbnail']['name'];
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../img/" . $thumbnail_video);

        $sql = "INSERT INTO galeri (judul_media, deskripsi_media, id_kategori, tipe_media, url_media, thumbnail_media, tanggal_media) 
                VALUES (:judul, :deskripsi, :kategori, :tipe_media, :url_media, :thumbnail_media, :tanggal)";
        $query = $conn->prepare($sql);
        $query->execute([
            ':judul' => $judul,
            ':deskripsi' => $deskripsi,
            ':kategori' => $kategori,
            ':tipe_media' => $tipe_media,
            ':url_media' => $url_video,
            ':thumbnail_media' => $thumbnail_video,
            ':tanggal' => $tanggal
        ]);
    }

    if ($query) {
        header('location:list_galeri.php');
    }
}

$query  = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>
<div class="judul_section">
    <h1>Tambah Foto/Video</h1>
    <hr>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="textbox black">
        <label for="judul">Judul Media</label>
        <input type="text" name="judul" id="judul" required>
    </div>

    <div class="textbox black">
        <label for="kat">Kategori</label>
        <div class="styled-select">
            <select id="kat" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <?php do { ?>
                    <option value="<?= $data['id_kategori']; ?>"><?= $data['nama_kategori']; ?></option>
                <?php } while ($data = $query->fetch()); ?>
            </select>
        </div>
    </div>

    <div class="textbox black">
        <label for="deskripsi">Deskripsi Media</label>
        <textarea id="deskripsi" name="deskripsi" required></textarea>
    </div>

    <div class="textbox black">
        <label for="tipe_media">Tipe Media</label>
        <div class="styled-select">
            <select id="tipe_media" name="tipe_media" required onchange="toggleMediaFields()">
                <option value="">Pilih Tipe Media</option>
                <option value="foto">Foto</option>
                <option value="video">Video</option>
            </select>
        </div>
    </div>

    <div class="textbox black" id="media_foto" style="display:none;">
        <label for="media">Upload Gambar</label>
        <input type="file" name="media" id="media">
    </div>

    <div id="media_video" style="display:none;">
        <div class="textbox black">
            <label for="url_video">URL Video</label>
            <input type="text" name="url_video" id="url_video">
        </div>
        <div class="textbox black">
            <label for="thumbnail">Thumbnail Video</label>
            <input type="file" name="thumbnail" id="thumbnail">
        </div>
    </div>

    <input type="submit" name="tambah_media" value="TAMBAH" class="btn">
</form>

<script>
function toggleMediaFields() {
    const mediaType = document.getElementById('tipe_media').value;
    document.getElementById('media_foto').style.display = mediaType === 'foto' ? 'block' : 'none';
    document.getElementById('media_video').style.display = mediaType === 'video' ? 'block' : 'none';
}
</script>

<?php require 'layout/footer.php'; ?>
