
<?php

//require '../../../vendor/autoload.php';
//$musicSearch = new \MVC\Controller\MusicController();
//$search = $musicSearch->getByMusic();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/ManagerMusic/index.php">Zing.mp3</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="src/View/layouts/listmusic.php" >
                    ListMusic
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="src/View/music/upload.php"  target="_blank">Upload</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="input" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
        </form>
    </div>
</nav>
