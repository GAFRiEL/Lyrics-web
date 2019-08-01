<?php 
$page = 'genre';
include('header.php') ?>
<br>
<br>

    <div class="container">
        <div class="row justify-content-center">
            <?php
                $sql    = "SELECT * FROM genre ORDER BY genre ASC";
                $query  = mysqli_query($db, $sql);

                while($genre = mysqli_fetch_array($query)){
                    echo '
                        <div class="col-md-3">
                            <span class="btn w-100 m-3 alert-primary"><a class="text-decoration-none" href="#">'.$genre['genre'].'</a></span>
                        </div>
                    ';
                }

            ?>
        </div>
    </div>

<?php include('main_footer.php') ?>