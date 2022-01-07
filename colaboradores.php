<?php include('header.php') ?>

<div style="background: url('./Assets/images/colaboradores.jpg') no-repeat center center;background-size:100% auto;">
    <div class="p-5 mb-4 bg-dark-opacity">
        <div class="container py-5">
            <div class="container py-5">
                <h1 class="display-5 fw-bold text-light">Colaboradores</h1>
            </div>
        </div>
    </div>
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

<?php include('footer.php') ?>