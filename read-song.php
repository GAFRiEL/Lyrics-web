<?php 

include('header.php');

$id = $_GET['id'];

$sql    = " SELECT artist.id, artist.name, genre.id, genre.genre, album.id, album.judul, song.id, song.title, song.lyrics, song.artist_id, song.album_id
            FROM song, artist, genre, album
            WHERE artist.id=song.artist_id AND genre.id=song.genre_id AND album.id=song.album_id";
$query  = mysqli_query($db, $sql);
$song   = mysqli_fetch_assoc($query);

?>

    <input type="hidden" name="id" value="<?php echo $song['id'] ?>" />

    <div class="container">
        <h2 class="text-white"><?php echo $song['title'] ?></h2>
        <h6 class="text-white"><?php echo $song['name'] ?> - <?php echo $song['judul'] ?></h6> <br>

        <div class="col-md-12 row justify-content-center text-center text-white rounded">
            <div class="col-md-4">
                <p class=""><?php echo $song['lyrics'] ?></p>
            </div>
        </div>
    </div>

<?php include('main_footer.php') ?>