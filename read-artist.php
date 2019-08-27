<?php 
$home = 'page';
$page = 'artist';
include('header.php'); 

if (!isset($_GET['id']) ){
    header('Location: list-artist.php');
}

$id = $_GET['id'];

$sql        =  "SELECT *
                FROM artist
                WHERE artist_id=$id";
$sql2       =  "SELECT *
                FROM song
                WHERE artist_id=$id";

$query      = mysqli_query($db, $sql);
$query2     = mysqli_query($db, $sql2);

$artist     = mysqli_fetch_assoc($query);

?>

<input type="hidden" name="id" value="<?php echo $artist['AI'] ?>" />

<div class="container">
    <h2 class="text-dark"><?php echo $artist['name']; ?></h2>
    <h3>Songs</h3> <br> 

    <ul class="list-unstyled">
        <?php while ($song = mysqli_fetch_assoc($query2)) { ?>
        <li class="row">
            <a class="m-2" href="read-song.php?id=<?php echo $song['id'] ?>">
                <h4><?php echo $song['title']; ?></h4>
            </a>
            <h4 class="m-2">-</h4>
            <a class="m-2" href="read-album.php?id=<?php echo $song['album_id']; ?>">
                <h4><?php echo $song['album_id']; ?></h4>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>

<?php include('main_footer.php') ?>