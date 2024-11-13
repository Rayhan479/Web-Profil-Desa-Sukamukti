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
                <h1 class="text-capitalize mb-5 text-lg">LEMBAGA PEMERINTAHAN</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-lg-10">
            <div class="department-content mt-5">
                <h3 class="text-md">Jumlah Aparat</h3>
                <div class="divider my-4"></div>
                <p class="lead">
                Kepala Desa		: 1	orang <br>
                Sekretaris Desa		: 1	orang <br>
                Perangkat Desa	: 8	orang <br>
                Staf Desa		: -	orang <br>
                BPD			: 7	orang <br> <br>
                </p>
            </div>
        </div>
    </div>

<?php require 'layout/footer.php'; ?>