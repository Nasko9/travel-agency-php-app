<?php require_once('includes/header.php') ?>

    <div>
        <!-- Slajder -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <!-- Paginacija -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/slider/placeholder.png" class="d-block w-100" alt="slide-1">
                    <div class="carousel-caption d-block">
                        <a href="#" class="btn slide-btn">Slide 1</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider/placeholder.png" class="d-block w-100" alt="slide-2">
                    <div class="carousel-caption d-block">
                        <a href="#" class="btn slide-btn">Slide 2</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider/placeholder.png" class="d-block w-100" alt="slide-3">
                    <div class="carousel-caption d-block">
                        <a href="#" class="btn slide-btn">Slide 3</a>
                    </div>
                </div>
            </div>
            <!-- Dugme za promenu slajdova -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Sadrzaj -->
        <div class="container">
            <div class="mt-5 text-center">
                <p>Putujte sa nama i budite uvek:</p>
                <h1>Za kilometar ispred svih...</h1>
            </div>

            <!-- Destinacije -->
            <div class="mt-5">
                <h2>Dostupne destinacije</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 destination-row">
                    <div class="col destination-col">
                        <div class="card h-100">
                            <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col destination-col">
                        <div class="card h-100">
                            <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col destination-col">
                        <div class="card h-100">
                            <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col destination-col">
                        <div class="card h-100">
                            <img src="./assets/img/slider/placeholder.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('includes/footer.php') ?>