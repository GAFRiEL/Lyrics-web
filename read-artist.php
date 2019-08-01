<?php 

include('header.php'); 

$id = $_GET['id'];

$sql        = " SELECT artist.id, artist.name, genre.id, genre.genre, album.id, album.judul, song.id, song.title, song.lyrics, song.artist_id, song.album_id
            FROM song, artist, genre, album
            WHERE artist.id=song.artist_id AND genre.id=song.genre_id AND album.id=song.album_id ";
$query      = mysqli_query($db, $sql);
$artist     = mysqli_fetch_assoc($query);

?>

<div class="container">
    <h2><?php $artist['name'] ?></h2>
</div>

<?php include('main_footer.php') ?>