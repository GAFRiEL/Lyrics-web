<?php 
$home = 'page';
$page = 'song';
include('header.php');

if (!isset($_GET['id']) ){
    header('Location: list-song.php');
    $error = 'no-artist';
}

$id = $_GET['id'];

$sql    =  "SELECT artist.artist_id, artist.name, genre.genre_id, genre.genre, album.album_id, album.judul, song.id, song.title, song.lyrics, song.artist_id, song.album_id
            FROM song
            LEFT JOIN artist ON song.artist_id = artist.artist_id
            LEFT JOIN album ON song.album_id = album.album_id
            LEFT JOIN genre ON song.genre_id = genre.genre_id
            WHERE id=$id";
$query  = mysqli_query($db, $sql);
$song   = mysqli_fetch_assoc($query);

?>

    <input type="hidden" name="id" value="<?php echo $song['id'] ?>" />

    <div class="container">
        <h2 class="text-dark"><?php echo $song['title'] ?></h2>
        <h6 class="text-dark"><?php echo $song['name'] ?> - <?php echo $song['judul'] ?></h6> <br>

        <div class="col-md-12 row justify-content-center text-center text-dark rounded">
            <div class="col-md-4">
                <p class=""><?php echo $song['lyrics'] ?></p>
            </div>
        </div>
    </div>

<?php include('main_footer.php') ?>