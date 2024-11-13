<?php
require 'layout/header.php';

$query  = $conn->query("SELECT kategori.* ,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori ORDER BY artikel.id_artikel DESC");
$data   = $query->fetch();
?>

<section class="page-title bg-1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">KEADAAN SOSIAL</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>

            <div class="container">
                    <div class="col-lg-10">
                        <div class="department-content mt-5">

                            <h3 class="text-md">Pendidikan</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            SD/ MI	: 386	Orang <br>
                            SLTP/ MTs	: 395	Orang <br>
                            SLTA/ MA	: 611	Orang <br>
                            S1/ Diploma	: 125	Orang <br>
                            Putus Sekolah	: 78	Orang <br>
                            Buta Huruf	: 38	Orang <br><br>
                            </p>

                            <h3 class="text-md">Lembaga Pendidikan</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            K/PAUD	: 1 Buah di Dusun Muaro  <br>
                            SD/MI	: 1 Buah di Dusun Harapan <br>
                            MTS	: 1 Buah di Dusun Harapan <br>
                            SMA	: 1 Buah di Dusun Sagiran        <br><br>                   
                            </p>

                            <h3 class="text-md">Kesehatan</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            <ol>
                                <li>Kematian Bayi</li>
                                <ul>
                                    <li>Jumlah Bayi lahir pada tahun ini 	: 1 orang</li>
                                    <li>Jumlah Bayi meninggal tahun ini	: 0 orang</li>
                                </ul>

                                <li>Kematian Ibu Melahirkan</li>
                                <ul>
                                    <li>Jumlah ibu melahirkan tahun ini	: </li>
                                    <li>Jumlah ibu melahirkan meninggal tahun ini	: 0 orang</li>
                                </ul>

                                <li>Cakupan Imunisasi </li>
                                <ul>
                                    <li>Cakupan Imunisasi Polio 3			: 29 orang</li>
                                    <li>Cakupan Imunisasi DPT-1			: 29 orang </li>
                                    <li>Cakupan Imunisasi Cacar			:   0 orang</li>
                                </ul>

                                <li>Gizi Balita </li>
                                <ul>
                                    <li>Jumlah Balita					: 142 orang</li>
                                    <li>Balita gizi buruk				:     0 orang</li>
                                    <li>Balita gizi baik				: 141 orang</li>
                                    <li>Balita gizi kurang				:    1 orang</li>

                                </ul>

                                <li>Pemenuhan air bersih</li>
                                <ul>
                                    <li>Pengguna sumur galian			: 390  KK</li>
                                    <li>Pengguna air PAH				: 30    KK </li>
                                    <li>Pengguna sumur pompa			:   -	KK </li>
                                    <li>Pengguna sumur hidran umum		: 48	KK </li>
                                    <li>Pengguna air sungai				:  13   KK</li>
                                </ul>
                            </ol>                  
                            </p>

                            <h3 class="text-md">Keagamaan</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            <span class="strong-text">Jumlah Pemeluk :  </span> <br>
                            Islam			: 1633  orang <br>
                            Katolik			:     - 	 orang <br>
                            Kristen		:     -	 orang <br>
                            Hindu			:     -	 orang <br>
                            Budha			:     -	 orang      <br><br>

                            <span class="strong-text">Jumlah tempat ibadah :</span><br>
                            Masjid / Musholla	:  8 buah <br>
                            Gereja			:  -  buah <br>
                            Pura			:  -  buah <br>
                            Vihara			:  -  buah <br> <br>
                            </p>

                            
                        </div>
                    </div>

                    
                </div>



<?php require 'layout/footer.php'; ?>