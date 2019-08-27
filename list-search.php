<?php 
$home = 'page';
$page = 'page';
include('header.php');

?>

<br> <br>

<div class="container">
    <h1>
        Hasil Pencarian :
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo $cari;
        }
        ?>
    </h1>
    
    <table class="table table-borderless table-hover">
        <tbody> 
            <?php
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $data = mysqli_query($db, "SELECT * FROM song WHERE title LIKE '%".$cari."%'");				
            } else {
                $data = mysqli_query("SELECT * FROM song");		
            }
            
            if (mysql_num_rows($data) > 0 ) {
                while ($row = mysql_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php $row['title'] ?></td>
                </tr>
                    
            <?php 
                }
            } else { ?>

                <tr>
                    <td>Lagu tidak di temukan</td>
                </tr>

            <?php } ?>
                
        </tbody>
    </table>

</div>

<?php include('main_footer.php') ?>
