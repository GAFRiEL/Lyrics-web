<?php 
$page = 'artist';
include('header.php') ?>
<br>
<br>

<div class="container">
    <h1>Artist List</h1>
    
    <div class="row justify-content-center">

        <?php
            $sql    = "SELECT * FROM artist";
            $query  = mysqli_query($db, $sql);

            while($artist = mysqli_fetch_array($query)){
                echo '
                        <div class="col-12 col-sm-6 col-md-3 m-4">
                            <div class="card m-1 alert-primary">
                                <div class="card-body">
                                    <div class="description text-center">
                                        <h5 class="font-weight-bold">
                                            '.$artist['name'].'
                                        </h5>
                                    </div>
                                </div>
                                <a href="read-artist.php?id='.$artist['id'].'" class="btn btn-primary rounded-0">
                                    Lihat
                                </a>
                            </div>
                        </div>
                    ';
            }

        ?>

    </div>

</div>

<?php include('main_footer.php') ?>