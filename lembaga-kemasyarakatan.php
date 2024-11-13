<?php
require 'layout/header.php';

$query  = $conn->query("SELECT kategori.* ,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori ORDER BY artikel.id_artikel DESC LIMIT 3");
$data   = $query->fetch();
?>

<section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">LEMBAGA KEMASYARAKATAN</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>


            <div class="container">
                    <div class="col-lg-10">
                        <div class="department-content mt-5">

                            <h3 class="text-md">Jumlah Lembaga Kemasyarakatan</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            LPM			: 1 <br>
                            PKK			: 1 <br>
                            Posyandu		: 1 <br>
                            Pengajian		: 2	Kelompok <br>
                            Arisan			: 2      Kelompok <br>
                            Simpan Pinjam		: 2	Kelompok <br>
                            Kelompok Tani		: 4	Kelompok <br>
                            Gapoktan		: 0	Kelompok <br>
                            Kepemudaan		: 1	Kelompok <br>
                            Remaja Mesjid		: 2	Kelompok <br>
                            Ormas/LSM		:   -	Kelompok <br>
                            Lain-lain			:   -	Kelompok <br><br>	
                            </p>

                         
                        </div>
                    </div>
                </div>

<?php require 'layout/footer.php'; ?>