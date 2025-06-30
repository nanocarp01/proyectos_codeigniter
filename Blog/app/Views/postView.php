 <!-- Page Header-->
 <?php  foreach($allData as $data):  ?>
                    
    <header class="masthead" style="background-image: url('<?= base_url('assets/img/'.$data->imagen);?>');">
   
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-10">
                        <div class="post-heading">

                            <h2><?= $data->titulo; ?></h2>
                            <h2 class="subheading"><?= $data->subtitulo; ?></h2>
                            <span class="meta">
                                Publicado por
                                <a href="#!"><?= $data->escrito_por; ?></a>
                                <!-- fecha -->
                                <?php $formattedDate = date('d M Y', strtotime($data->updated_at));?>
                                <?= $formattedDate; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-10">

                    <?= $data->contenido; ?>
                    </div>
                </div>
            </div>
        </article>
        <?php endforeach; ?>