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
                    <h1 class="text-capitalize mb-5 text-lg">PEMBAGIAN WILAYAH</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>

            <div class="container">
                    <div class="col-lg-10">
                        <div class="department-content mt-5">

                            <h3 class="text-md">Nama Dusun :</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">
                            Dusun Sagiran		: Jumlah 4 RT, 2 RW  <br>
                            Dusun Muaro		: Jumlah 3 RT, 1 RW  <br>
                            Dusun Sarona		: Jumlah 3 RT, 1 RW  <br>
                            Dusun Harapan 	: Jumlah 2 RW, 1 RT <br>
                            Dusun Jirak		: Jumlah 1 RW, 3 RT	 <br><br>
                            </p>

                         
                        </div>
                    </div>

                    
                </div>

<?php require 'layout/footer.php'; ?>