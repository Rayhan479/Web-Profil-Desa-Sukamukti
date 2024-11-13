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
                    <h1 class="text-capitalize mb-5 text-lg">SEJARAH DESA</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>

            <div class="container">
                    <div class="col-lg-10">
                        <div class="department-content mt-5">
                            <h3 class="text-md">Sejarah</h3>
                            <div class="divider my-4"></div>
                            <p class="lead">Ad nisi occaecat aliqua mollit ut proident. Officia dolor qui ea aute eiusmod duis culpa minim amet ea. Irure ut id do excepteur. Anim esse culpa adipisicing reprehenderit nisi consectetur.

                            <h3 class="mt-5 mb-4">Kepala Desa Yang Pernah Menjabat</h3>
                            <div class="divider my-4"></div>
                            <table class="table">
                                <thead class="thead-purple">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Periode Menjabat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>M. Judin Hasan</td>
                                        <td>1979  s/d	1986</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sudirman Manap</td>
                                        <td>1986  s/d	2000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Harmadi (Pjs)</td>
                                        <td>2000 s/d	2001</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Yohanis Yusuf</td>
                                        <td>2001 s/d	2006</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Hendri Eka Putra</td>
                                        <td>2006 s/d	2012</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Harmadi</td>
                                        <td>2013 s/d	2019</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Wenharmissalim (Pjs)</td>
                                        <td>2019</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Andrisman</td>
                                        <td>2019 s/d	Sekarang</td>
                                    </tr>
                                </tbody>
                            </table>                           

                        </div>
                    </div>

                    
                </div>
            </div>
       

    <?php require 'layout/footer.php'; ?>
