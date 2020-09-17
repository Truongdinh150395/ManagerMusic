<!--bang ben trai-->
<?php
require '../../../vendor/autoload.php';
//var_dump(__DIR__);
//die();
$page = isset($_REQUEST["page"])?$_REQUEST["page"]:NULL;

$musicController = new \MVC\Controller\MusicController();
$listMusic = $musicController->getAllMusic();

//var_dump($listMusic);
//die();
?>
<?php

////require '../../../vendor/autoload.php';
//$musicController = new \MVC\Controller\MusicController();
//$id =$_GET["id"];
//$music = $musicController->getMusicById($id);



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
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<div class="container">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12 col-md-12 menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="http://localhost/ManagerMusic/index.php">Zing.mp3</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">
                                    ListMusic
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="upload.php"  target="_blank">Upload</a>
                                <!--                                href="src/View/music/upload.php"-->
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
                <!--         LIST-MUSIC  -->
            <div class="col-md-12">
                <div class="row">
<!--                    <div class="col-md-6">-->
<!--                        <h1>Ben trai</h1>-->
<!--                    </div>-->
                    <!--bang ben phai-->
                    <div class="col-md-6">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Sing</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Author</th>
                            </tr>
                            <?php foreach ($listMusic as $key => $value):?>
                                <tr>
                                    <td><?php echo ++$key;?></td>
                                    <td><?php echo $value["music_name"];?></td>
                                    <td>
                                        <audio controls><!-- <source src="../../../--><?php //echo $music["url"];?><!--" type="audio/ogg">-->
                                            <source src="../../../<?php echo $value["url"];?>">
                                        </audio>
                                    </td>
                                    <td><img style="width: 100px;height: 100px;" src="../../../<?php echo $value["img"];?>"/></td>
                                    <!--                    <td><img src="../../../--><?php //echo $value["img"];?><!--" /></td>-->
                                    <td><?php echo $value["category_name"];?></td>
                                    <td><?php echo $value["author"];?></td>
                                </tr>
                            <?php endforeach;?>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
<!--     END LIST M       -->
        </div>
        <div class="col-12 col-md-12 footer mt-5">
            <?php include_once "../layouts/footer.php"?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




