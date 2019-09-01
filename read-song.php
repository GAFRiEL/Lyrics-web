<?php 
$home = 'page';
$page = 'song';
include('header.php');

if (!isset($_GET['id']) ){
    header('Location: list-song.php');
    $error = 'no-artist';
}

$id = $_GET['id'];

$sql    =  "SELECT artists.artist_id, artists.name, genres.genre_id, genres.genre, albums.album_id, albums.judul, songs.id, songs.title, songs.lyrics, songs.artist_id, songs.album_id
            FROM songs
            LEFT JOIN artists ON songs.artist_id = artists.artist_id
            LEFT JOIN albums ON songs.album_id = albums.album_id
            LEFT JOIN genres ON songs.genre_id = genres.genre_id
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