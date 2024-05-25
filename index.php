<?php require_once('includes/header.php'); ?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url(https://cdn.pixabay.com/photo/2014/08/21/14/51/dog-423398__480.jpg);">
        </div>

        <div class="carousel-item" style="background-image: url(https://cdn.pixabay.com/photo/2019/06/28/00/16/pet-4303277__480.jpg);">
        </div>

        <div class="carousel-item" style="background-image: url(https://cdn.pixabay.com/photo/2016/11/01/23/38/beach-1790049__480.jpg);">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div>
<div class="container">
    <div class="row1 text-center">
        <div class="col col-md-10 col-lg-6">
            <div class="col align-self-center">
                <h1>
                    Arta de a căuta informații în Google!
                </h1><br>
            </div>
            <div class="col align-self-center">
                <h2>
                    Curs revoluționar
                </h2>
            </div>
            <div class="col align-self-center">
                <div class="text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque doloribus
                    qui atque vero dignissimos dolor itaque consequuntur at, facere modi odio natus
                    alias facilis, voluptate perferendis. Labore sit saepe commodi!
                </div>
            </div>
            <div class="col align-self-center">
                <p class="button">
                    <button type="button" class="btn btn-primary">Inscrie-te acum</button>
                    <button type="button" class="btn btn-outline-secondary">Cere detalii</button>
                </p>
            </div>
        </div>
    </div>
</div>
<div style="background-color: gray;">
    <div class="caracteristici">
        <div class="container">
            <div class="row py-5 align-self-center">
                <div class="column col-xs-12 col-sm-12 col-md-4">
                    <div class="square-image si-1"></div>
                    <h4>Creativitate</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="column col-xs-12 col-sm-6 col-md-4">
                    <div class="square-image si-2"></div>
                    <h4>Curiozitate</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
                <div class="column col-xs-12 col-sm-6 col-md-4">
                    <div class="square-image si-3"></div>
                    <h4>Dezvoltare</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container2">
    <div class="row3 align-self-center">
        <div class="column col-lg-3 col-md-6">
            <h3>
                <?php echo number_format($col1 = 6320, 0, ',', '.'); ?>
            </h3>
            <p>
                <?php $text = "participanti la modulul: ";
                $x = 1;
                echo $text, $x;
                $x++ ?>
            </p>
        </div>
        <div class="column col-lg-3 col-md-6">
            <h3>
                <?php echo number_format($col2 = 4596, 0, ',', '.'); ?>
            </h3>
            <p>
                <?php
                echo $text, $x;
                $x++ ?>
            </p>
        </div>
        <div class="column col-lg-3 col-md-6">
            <h3>
                <?php echo number_format($col3 = 46856, 0, ',', '.'); ?>
            </h3>
            <p>
                <?php
                echo $text, $x;
                $x++ ?>
            </p>
        </div>
        <div class="column col-lg-3 col-md-6">
            <h3>
                <?php $col4 = $col1 + $col2 + $col3;
                if ($col4 > 50000) {
                    echo '<strong>' . number_format($col4, 0, ',', '.') . '</strong>';
                } else {
                    echo number_format($col4, 0, ',', '.');
                } ?>
            </h3>
            <p>
                <?php
                echo "participanti in total" ?>
            </p>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>