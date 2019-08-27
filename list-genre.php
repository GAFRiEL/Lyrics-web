<?php 
$home = 'page';
$page = 'genre';
include('header.php') ?>
<br> <br>

    <div class="container">
        <div class="row justify-content-center">
            <?php
                $sql    = "SELECT * FROM genre ORDER BY genre ASC";
                $query  = mysqli_query($db, $sql);

                while($genre = mysqli_fetch_array($query)){
                    echo '
                        <div class="col-12 col-sm-6 col-md-3 m-4">
                            <div class="card m-1 alert-primary">
                                <a href="read-genre.php?id='.$genre['genre_id'].'" class="btn btn-primary shadow rounded-0">
                                    '.$genre['genre'].'
                                </a>
                            </div>
                        </div>
                    ';
                }

            ?>
        </div>
    </div>

<?php include('main_footer.php') ?>