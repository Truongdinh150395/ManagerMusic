<?php

require __DIR__.'/vendor/autoload.php';

$page = isset($_REQUEST["page"])?$_REQUEST["page"]:NULL;

$musicController = new \MVC\Controller\MusicController();
$musictopfive = $musicController->getTopFive();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12 col-md-12 menu">
                <?php include_once "src/View/layouts/navbar.php"?>
            </div>
            <div class="col-12 col-md-12 body">
                <div class="row">
                    <div class="col-12 col-md-12 slider">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/banner/images-1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/banner/images-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/banner/image-3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/banner/image-5.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 new-music pt-2">
                        <div class="row">
                            <div class="col-12 col-md-12 title-new-music">
                                <h4>Nhac moi nhat</h4>
                            </div>
                            <div class="col-12 col-md-12 list-new-music">
                                <div class="row">

                                    <?php foreach ($musictopfive as $key => $value):?>

                                    <div class="col-md-4 item-new-music">
                                        <div class="card"">
                                            <img class="card-img-top" style="height: 350px;wight:100px;" src="<?php echo $value["img"];?>" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="src/View/music/detail.php?id=<?php echo $value["id"]; ?>"><?php echo $value["name"];?></a></h5>
                                                <p class="card-text"><?php echo $value["author"];?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
<!--    list_music-->
<!--        --><?php //include_once("src/View/layouts/listmusic.php");?>
                    <!--  FOOTER      -->
            <div class="col-12 col-md-12 footer mt-5">
                <?php include_once "src/View/layouts/footer.php"?>
            </div>


        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>