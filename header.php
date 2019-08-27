<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- icon -->
    <link rel="shortcut icon" href="asset/title-logo.png" type="image/x-icon">

    <!-- title -->
    <title>Lyrics Web <?php  ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="alert-primary">

<nav class="navbar navbar-expand-lg pt-4 pb-4 bg-primary">
    <a class="navbar-brand" href="index.php">
        <img src="asset/Cropped.png" class="" style="width: 150px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <?php

        if ($home == 'page') {
            echo '
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item rounded '.(($page == 'artist')?'alert-primary':"").'">
                        <a class="nav-link text-dark" href="list-artist.php">Artist</a>
                    </li>
                    <li class="nav-item rounded '.(($page == 'genre')?'alert-primary':"").'">
                        <a class="nav-link text-dark" href="list-genre.php">Genre</a>
                    </li>
                    <li class="nav-item rounded '.(($page == 'song')?'alert-primary':"").'">
                        <a class="nav-link text-dark" href="list-song.php">Song</a>
                    </li>
                </ul>
            ';
        } else {
            echo '
            <ul class="navbar-nav mr-auto"></ul>            
            
            ';
        }
    
    ?>

        <form action="list-search.php" class="form-inline my-2 my-lg-0" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Lagu" aria-label="Search" name="cari">
            <input class="btn alert-primary my-2 my-sm-0" type="submit" value="cari">
        </form>
    </div>
</nav> <br>
