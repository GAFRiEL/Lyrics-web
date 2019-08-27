<?php 
$home = 'page';
$page = 'genre';
include('header.php'); 

if (!isset($_GET['id']) ){
    header('Location: list-genre.php');
}

$id = $_GET['id'];

$sql        =  "SELECT * FROM genre WHERE genre_id = $id";
$sql2       =  "SELECT * FROM song WHERE genre_id = $id";
$query      = mysqli_query($db, $sql);
$query2      = mysqli_query($db, $sql2);
$genre      = mysqli_fetch_assoc($query);

?>

<input type="hidden" name="id" value="<?php echo $genre['AI'] ?>" />

<div class="container">
    <h2 class="text-dark"><?php echo $genre['genre']; ?></h2>
    <h3>Songs</h3> <br>

    <ul class="list-unstyled">
        <li>
            <?php while($song = mysqli_fetch_assoc($query2)) { ?>
            <a href="read-song.php?id=<?php echo $song['id'] ?>">
                <h4><?php echo $song['title']; ?></h4>
            </a>
            <?php } ?>
        </li>
    </ul>
</div>

<?php include('main_footer.php') ?>