<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lyrics | Web</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body id="list">

<nav class="navbar navbar-expand-lg pt-4 pb-4">
    <a class="navbar-brand" href="index.php">Lyrics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            <li class="nav-item rounded <?php if ($page == 'artist') {echo 'bg-dark';} ?>">
                <a class="nav-link" href="list-artist.php">Artist</a>
            </li>
            <li class="nav-item rounded <?php if ($page == 'genre') {echo 'bg-dark';} ?>">
                <a class="nav-link" href="list-genre.php">Genre</a>
            </li>
            <li class="nav-item rounded <?php if ($page == 'song') {echo 'bg-dark';} ?>">
                <a class="nav-link" href="list-song.php">Song</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Lagu,artis,genre" aria-label="Search">
        <button class="btn alert-primary my-2 my-sm-0" type="submit">Cari</button>
        </form>
</div>
</nav> <br>