<?php include '../nav/head.php'; ?>
    <!-- Navbar -->

    <!-- Jumbotron -->
        <main>
                <section class="text-center container  py-4 mt-4 shadow-lg rounded-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 mx-auto">
                           <h1 class="jumbotron-heading">Philippine Vignettes by E2PS</h1>
                            <p class="lead text-muted">An inviting medley of moments—each photo a brief chapter in a visual storybook of culture, nature, and everyday charm. Whether it's sweeping cityscapes or quiet green retreats, this curated collection captures the soul of each scene with warmth and wonder.</p>
                            <p>
                        </div>
                    </div>
                </section>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <?php
                                foreach ($carousel as $index => $crsl_listItem) {
                                    $active = ($index === 0) ? 'active' : '';
                                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="' . ($active ? 'true' : 'false') . '" aria-label="Slide ' . ($index + 1) . '"></button>';
                                }
                            ?>
                        </div>
                            
                        <!-- Carousel Items -->
                        <div class="carousel-inner">
                            <?php
                                foreach ($carousel as $index => $crsl) {
                                    $active = ($index === 0) ? 'active' : '';
                                ?>
                                    <div class="carousel-item <?= $active ?>">
                                        <img src="<?= htmlspecialchars($crsl['carousel_img']) ?>" class="w-100 h-100" alt="<?= htmlspecialchars($crsl['carousel_title']) ?>">
                                        <div class="carousel-caption d-none d-md-block blur">
                                            <h3><?= htmlspecialchars($crsl['carousel_title']) ?></h3>
                                            <p><?= htmlspecialchars($crsl['carousel_desc']) ?></p>
                                        </div>
                                    </div>
                                <?php
                              }
                            ?>
                        </div>
                                
                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                        
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <?php
                            $counter = 0;
                            $align = '';
                            foreach ($card as $crd){
                                if ($counter == 1) {
                                    $align = 'order-md-2'; 
                                }
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" src="<?= $crd['card_img']?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                                        <div class="card-body">
                                                <h3 class="card-title"><?= $crd['card_title'] ?></h3>
                                            <p>
                                                <span class="dots">...</span>
                                                <span class="more" style="display: none;">
                                                <?= $crd['card_prg']?> </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                                                </div>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $align = '';
                                if ($counter == 1) {
                                    $counter = 0; //reset counter
                                }else{
                                    $counter++; //increment
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
            
        </main>
          <!-- Jumbotron -->
</header>
<?php include '../nav/footer.php'; ?>