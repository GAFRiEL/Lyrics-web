<?php 
$home = 'page';
$page = 'artist';
include('header.php'); 

if (!isset($_GET['artist_id']) ){
    header('Location: list-artist.php');
    $error = 'no-artist';
}

$id = $_GET['artist_id'];

$sql        =  "SELECT artist.artist_id, artist.name, album.album_id, album.judul, song.id, song.title, song.lyrics, song.artist_id, song.album_id
                FROM song
                LEFT JOIN artist ON song.artist_id = artist.artist_id
                LEFT JOIN album ON song.album_id = album.album_id
                WHERE artist_id=$id";
$query      = mysqli_query($db, $sql);
$artist     = mysqli_fetch_assoc($query);

?>

<input type="hidden" name="id" value="<?php echo $artist['artist_id'] ?>" />

<div class="container">
    <h2 class="text-dark"><?php echo $artist['name']; ?></h2>
</div>

<?php include('main_footer.php') ?>