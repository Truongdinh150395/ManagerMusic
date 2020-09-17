<?php

require '../../../vendor/autoload.php';
$musicController = new \MVC\Controller\MusicController();
$id = $_GET["id"];
$music = $musicController->getMusicById($id);
$categoryController = new \MVC\Controller\CategoryCotroller();
$categorys = $categoryController->getAllCategory();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $audio = time().$_FILES['audio']["name"];
    $file =$_FILES['audio']['tmp_name'];
    $path = "mp3/".$_FILES['audio']['name'];


    if(move_uploaded_file($file,$path)){
        echo "Audio success";
    }else{
        echo " Audiofail";
    }
    $image = $_FILES['image']["name"];
    $fileImage = $_FILES['image']['tmp_name'];
    $pathImage = "images/".$_FILES['image']['name'];
    if(move_uploaded_file($fileImage,$pathImage)){
        echo "Image success";
    }else{
        echo " Image fail";
    }

    $category_id = $_POST['id_category'];
    $author = $_POST['author'];


    $data = [
        'name' => $name,
        'audio' => $path,
        'img' => $pathImage,
        'category_id' => $category_id,
        'author' => $author
    ];
   $musicController->addMusic($data);


}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="../listmusic.php">
                                    ListMusic
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href=""  target="_blank">Upload</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-md-12 body">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Autodio :</label>
                        <input type="file" class="form-control-file" name="audio">
                    </div>
                    <div class="input-group mb-3">

                        <select class="custom-select" name="">
                            <!--select-->

                            <?php foreach ($categorys as $key => $value): ?>
                                <option value="<?php echo $value["id"]; ?>" name="id_category"><?php echo $value["name_category"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text">Options</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image :</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Author :</label>
                        <input type="text" class="form-control" name="author" aria-describedby="emailHelp"
                               placeholder="Enter author">
                    </div>

                    <button type="submit" class="btn btn-primary" name="btn-sm">Add</button>
                </form>

            </div>
        </div>
        <div class="col-12 col-md-12 footer mt-5">
            <?php include_once "../layouts/footer.php" ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
