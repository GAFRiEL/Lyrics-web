<?php 
$home = 'page';
$page = 'artist';
include('header.php'); 

if (!isset($_GET['id']) ){
    header('Location: list-artist.php');
}

$id = $_GET['id'];

$sql        =  "SELECT * FROM song
                WHERE album_id = $id";
$sql2       =  "SELECT * FROM album
                WHERE album_id = $id";

$query      = mysqli_query($db, $sql);
$query2     = mysqli_query($db, $sql2);

$album     = mysqli_fetch_assoc($query2);

?>

<input type="hidden" name="id" value="<?php echo $album['album_id'] ?>" />

<div class="container">
    <h2 class="text-dark"><?php echo $album['judul']; ?></h2>
    <h3>Albums</h3> <br> 

    <?php while ($song = mysqli_fetch_assoc($query)) { ?>
        <ul class="list-unstyled">
            <li>
                <a href="read-song.php?id=<?php echo $song['id'] ?>">
                    <h4><?php echo $song['title']; ?></h4>
                </a>
            </li>
        </ul>
    <?php } ?>
</div>

<?php include('main_footer.php') ?>