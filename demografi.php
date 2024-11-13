<?php
include 'layout/header.php';

$query  = $conn->query("SELECT gambar_artikel FROM artikel", PDO::FETCH_ASSOC);
$data   = $query->fetch();
?>

<section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">DEMOGRAFI</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>

       
            <div class="container">
                <div class="col-lg-10">
                    <div class="department-content mt-5">

                        <h3 class="text-md">Batas Wilayah Desa</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                        Letak geografi Desa  Tebing Tinggi, terletak diantara : <br><br>
                        Sebelah Utara		: Jalur Patah Kecamatan Sentajo Raya <br>
                        Sebelah selatan		: Kelurahan Benai <br>
                        Sebelah Barat		: Desa Benai Kecil <br>
                        Sebelah Timur		: Desa Pulau Lancang / Desa Simandolak <br><br>
                        </p>

                        <h3 class="text-md">Luas Wilayah Desa</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                        Pemukiman	: 35    ha <br>
                        Pertanian Sawah	: 50	ha <br>
                        Belukar	: 14	ha <br>
                        Rawa-rawa	: 26	ha <br>
                        Perkantoran	: 0,25  ha <br>
                        Sekolah	: 4       ha <br>
                        Jalan	: 29     Km <br>
                        Lapangan sepak bola	: 2       ha <br><br>
                        </p>


                        <h3 class="text-md">Orbitrasi</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                        Jarak ke ibu kota Kecamatan terdekat 	:  0,5  Km <br>
                        Lama jarak tempuh ke ibu kota Kecamatan	:  5 Menit <br>
                        Jarak ke ibu kota Kabupetan 			: 15 KM <br>
                        Lama jarak tempuh ke ibu kota Kabupaten 	:  20 Menit <br><br>
                        </p>

                        <h3 class="text-md">Jumlah Penduduk Berdasarkan Jenis Kelamin</h3>
                        <div class="divider my-4"></div>
                        <p class="lead">
                        Kepala Keluarga	: 474  KK <br>
                        Laki-laki	: 853 Orang <br>
                        Perempuan	: 848 Orang <br><br>
                        </p>


                    </div>
                </div>
            </div>


<?php require 'layout/footer.php'; ?>