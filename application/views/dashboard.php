<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('_partials/header') ?>
<?php $this->load->view('_partials/sidenav') ?>
 <!-- Modal -->
 <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= base_url('asset/img/audi.jpg') ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">Audi</h1>
                                <p>
                                Audi AG adalah sebuah produsen mobil asal Jerman yang menjual mobil di berbagai macam kelas dan harga untuk kalangan menengah ke atas. Audi juga merupakan pemilik merek Ducati dan Lamborghini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= base_url('asset/img/jeep.png') ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Jeep Rubicon</h1>
                                <p>
                                “All New Jeep Wrangler dibangun sesuai dengan estetika dan desain legendaris dari Jeep. Sebagai bentuk penghormatan pada lintas generasi, All New Jeep Wrangler kali ini hadir dengan bentuk eksterior yang lebih tebal dan gagah. Lebar, beltline body yang lebih rendah dengan bentuk jendela lebar untuk visibilitas yang lebih baik,” ujar Ari Utama, CEO PT. HASCAR International Motor yang adalah Agen Pemegang Merek baru Jeep di Tanah Air.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= base_url('asset/img/je.jpg') ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Hyundai Ioniq 5</h1>
                                <p>
                                Bicara soal dimensi, mobil ini memiliki panjang 4.635 mm, lebar 1.890 mm, tinggi 1.605 mm, dan jarak sumbu roda 3.000. Bobotnya adalah 2.370 kilogram. Soal performa, Ioniq 5 diklaim bisa menempuh 0-100 kpj hanya dalam waktu 7,4 detik. Kemudian, top speed mobil listrik ini tembus 185 kpj.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Categories of The Month -->

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Pilih Mobil</h1>
                </div>
            </div>
            <div class="row">
              <?php foreach($dashboard as $d) :?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                          <img  style="width:100%;height:100%;" src="<?=base_url('upload/barang/'.$d->gambar)?>"; alt="">
                          <div ();>
                            
                        </a>
                       
                        <div class="card-body">

                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"> <?= $d->nama_barang?></a>
                            <p class="card-text">
                               
                            </p>
                            <p class="text-muted">IDR <?= number_format ($d->harga_awal, 2) ?></p>
                            <!-- <a href="hop-single.html"><h1>Detail</h1</a> -->
                            <a href="<?=site_url('page/detail_lelang/'. $d->id_lelang)?>" class="h2 text-decoration-none text-dark">Detail</a>
                            <h1 class="h1" href="shop-single.html"></h1>
                          </div>
                        </div>
                        </div>
                      </div>
                      <?php endforeach?>
            
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

  <!-- end client section -->
  <?php $this->load->view('_partials/footer') ?>
</html>