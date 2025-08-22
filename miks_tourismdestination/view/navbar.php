
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
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?= $carousel[0][1]?>" class="d-block w-100" alt="<?= $carousel[0][1]?>">
                        <div class="carousel-caption d-none d-md-block blur">
                            <h3><?= $carousel[0][2]?></h3>
                            <p><?= $carousel[0][3]?></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?= $carousel[1][1]?>" class="d-block w-100" alt="<?= $carousel[1][1]?>">
                        <div class="carousel-caption d-none d-md-block blur">
                            <h3><?= $carousel[1][2]?></h3>
                            <p><?= $carousel[1][3]?></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="<?= $carousel[2][1]?>" class="d-block w-100" alt="<?= $carousel[2][1]?>">
                        <div class="carousel-caption d-none d-md-block blur">
                            <h3><?= $carousel[2][2]?></h3>
                            <p><?= $carousel[2][3]?></p>
                        </div>
                        </div>
                    </div>
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
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[0][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[0][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[0][2]?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[1][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[1][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[1][2]?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[2][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[2][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[2][2]?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[3][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[3][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[3][2] ?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[4][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[4][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                    <?= $card[4][2] ?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= $card[5][3]?>" alt="Card image cap" style="height: 225px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $card[5][1] ?></h3>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                    <?= $card[5][2] ?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img 
                    class="card-img-top" 
                    src="<?= $card[6][3]?>" 
                    alt="Scenic view of Rizal Park" 
                    style="height: 225px; object-fit: cover;"
                    >
                    <div class="card-body">
                    <h5 class="card-title"><?= $card[6][1] ?></h5>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[6][2] ?> 
                        </span>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">Updated 9 mins ago</small>
                    </div>
                    </div>
                </div>
                </div>
            
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img 
                    class="card-img-top" 
                    src="<?= $card[7][3]?>" 
                    alt="Greenbelt Mall in Makati" 
                    style="height: 225px; object-fit: cover;"
                    >
                    <div class="card-body">
                    <h5 class="card-title"><?= $card[7][1] ?></h5>
                    <p>
                        <span class="dots">...</span>
                        <span class="more" style="display: none;">
                        <?= $card[7][2] ?> </span>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button onclick="toggleText(this)" class="btn btn-sm btn-outline-primary">Read more</button>
                        </div>
                        <small class="text-muted">Updated 9 mins ago</small>
                    </div>
                    </div>
                </div>
                </div>
            
                        <script>
                        function toggleText(button) {
                            const card = button.closest('.card-body');
                            const dots = card.querySelector('.dots');
                            const more = card.querySelector('.more');
                        
                            if (dots.style.display === 'none') {
                            dots.style.display = 'inline';
                            more.style.display = 'none';
                            button.innerHTML = 'Read more';
                            } else {
                            dots.style.display = 'none';
                            more.style.display = 'inline';
                            button.innerHTML = 'Read less';
                            }
                        }
                        </script>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>
  <!-- Jumbotron -->
</header>