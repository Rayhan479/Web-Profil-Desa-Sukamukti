<?php
require 'layout/header.php';

$query  = $conn->query("SELECT kategori.* ,artikel.* FROM artikel LEFT JOIN kategori on artikel.id_kategori = kategori.id_kategori ORDER BY artikel.id_artikel DESC");
$data   = $query->fetch();
?>

<div class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">Tentang Desa</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Desa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="col-lg-10">
        <div class="department-content mt-5">
            <h3 class="text-md">Visi</h3>
            <div class="divider my-4"></div>
            <p class="lead">
                <strong class="strong-text">“Lorem tempor nostrud Lorem quis fugiat culpa incididunt ex do.”</strong>
                <br><br>
                Anim aliquip veniam nostrud consectetur in adipisicing.
            </p>
            <h3 class="mt-5 mb-4">Misi</h3>
            <div class="divider my-4"></div>
            <ul class="list-unstyled department-service">
                <li><i class="icofont-check mr-2"></i>Ut sit proident pariatur reprehenderit mollit ad duis labore nostrud eu sunt minim velit.</li>
                <li><i class="icofont-check mr-2"></i>Aute mollit consequat veniam incididunt consequat.</li>
                <li><i class="icofont-check mr-2"></i>Officia mollit reprehenderit minim fugiat sunt mollit do sunt esse.</li>
                <li><i class="icofont-check mr-2"></i>Duis et sit magna proident ullamco proident nisi eu ut duis aute irure mollit laboris.</li>
            </ul>
        </div>
    </div>
</div>


    <?php require 'layout/footer.php'; ?>
