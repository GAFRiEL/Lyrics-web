<?php 
$home = 'home';
$page = 'home';
include('header.php');
?>

<main class="py-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div id="content" class="col-12">
                        <div class="card main-menu border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="row menu-group">

                                    <a href="list-artist.php" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                        <div class="icon-block alert alert-primary" role="alert">
                                            <h1>Artist</h1>
                                            <hr>
                                            <div class="icon">
                                                <p>Cari Lirik Berdasarkan Artist</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="list-genre.php" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                        <div class="icon-block alert alert-primary" role="alert">
                                            <h1>Genre</h1>
                                            <hr>
                                            <div class="icon">
                                                <p>Cari Lirik Berdasarkan Genre</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="list-song.php" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                        <div class="icon-block alert alert-primary" role="alert">
                                            <h1>Lagu</h1>
                                            <hr>
                                            <div class="icon">
                                                <p>Cari Lirik Berdasarkan Lagu</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('main_footer.php') ?>    
