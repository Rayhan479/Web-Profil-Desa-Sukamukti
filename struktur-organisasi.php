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
                    <h1 class="text-capitalize mb-5 text-lg">STRUKTUR ORGANISASI</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>

            <div class="container">
                    <div class="col-lg-10">
                        <div class="department-content mt-5">

                            <h3 class="text-md">Nama-Nama Aparat Desa :</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            Kepala desa			: Andrisman <br>
                            Sekretaris Desa			: Syafrawadi <br>
                            Kepala Seksi Pemerintahan	: Nopris Andika Putra, S.Sos <br>
                            Kepala Urusan Umum		: Gusti Randa, S.Pd.I <br>
                            Kepala Seksi Kesejahteraan	: Hardenis, S.Pd.I <br>
                            Kepala Seksi Keuangan		: Sovan Indranadi, S.Pi <br>
                            Kepala Dusun <br>
                                <ul>
                                    <li>Dusun Harapan		: Yurnalis</li>
                                    <li>Dusun Sagiran		: Jasmidi </li>
                                    <li>Dusun Muaro			: Khairi Tusqa</li>
                                    <li>Dusun Sarona		: Wiwin Kurniawan, S.Hum</li>
                                    <li>Dusun Jirak			: Sugeng</li>
                                </ul> 
                            </p>

                            <h3 class="text-md">Nama-Nama Anggota BPD: </h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            Ketua				: Rico Nopriansyah, SP <br>
                            Wakil Ketua 			: Resdi <br>
                            sekretaris				: Wira Meinis Triagusman, S.Ag <br>
                            Anggota				: <br>
                                <ul>
                                    <li>Hasliwati, S.Pd</li>
                                    <li>Darkisah</li>
                                    <li>A. Alfi Qadri, S.Pd</li>
                                    <li>Yusni Hernelis, S.Pd.I</li>
                                </ul>                                                                                                                                                                                  
                            </p>
                        </div>
                    </div>             
                </div>

<?php require 'layout/footer.php'; ?>