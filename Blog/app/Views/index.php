
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Nano Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach($allData as $data):  ?>
                        <div class="post-preview">
                            <a href="<?php echo base_url('/post/'.$data->slug); ?>">
                                <h2 class="post-title"><?= $data->titulo; ?></h2>
                                <h3 class="post-subtitle"><?= $data->subtitulo; ?></h3>
                            </a>
                            <p class="post-meta">
                                Publicado por
                                <a href="#!"><?= $data->escrito_por; ?></a>
                                <!-- fecha -->
                                <?php $formattedDate = date('d M Y', strtotime($data->updated_at));?>
                                <?= $formattedDate; ?>
                            </p>
                            
                        </div>
                    <?php endforeach; ?>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
       