<?php include('header.php') ?>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background:url(Assets/images/banner_1.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="transparent"/></svg>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background:url(Assets/images/banner_2.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="transparent"/></svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background:url(Assets/images/banner_3.jpg);">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="transparent"/></svg>

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img src="<?= "{$imgrand}_" . rand(1, 5) . ".jpg"; ?>" height="180" class="rounded-circle">

                <h2>Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="<?= "{$imgrand}_" . rand(1, 5) . ".jpg"; ?>" height="180" class="rounded-circle">

                <h2>Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="<?= "{$imgrand}_" . rand(1, 5) . ".jpg"; ?>" height="180" class="rounded-circle">

                <h2>Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

</div>



<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Você pode ajudar</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php for ($i = 0; $i <= 15; $i++): ?>
            <div class="col-md-3">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?= "{$imgrand}_" . rand(1, 5) . ".jpg"; ?>');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 bg-dark-opacity">
                        <h4 class="pt-5 mt-5 mb-4 display-6 fw-bold">Short title, long jacket</h4>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <small><i class="bi bi-diagram-3"></i> <?= rand(15, 37) ?> Vagas</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <small><i class="bi bi-people"></i> <?= rand(1, 15) ?> Voluntários</small>
                            </li>
                        </ul>
                        <p><a href="#" class="btn btn-outline-light w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Detalhes</a></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

</div>

<?php include('modal.php') ?>
<?php include('footer.php') ?>