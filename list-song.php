<?php 
$page = 'song';
include('header.php') ?>
<br>
<br>

<div class="container">
    <h1>Song List</h1>
    
    <table class="table table-borderless table-hover">
        <tbody> 
        
            <?php
                $sql    =  "SELECT artist.id, artist.name, genre.id, genre.genre, album.id, album.judul, song.id, song.title, song.artist_id, song.album_id
                            FROM song, artist, genre, album
                            WHERE artist.id=song.artist_id
                            AND genre.id=song.genre_id
                            AND album.id=song.album_id
                            ORDER BY title ASC";
                $query  = mysqli_query($db, $sql);
                $no     = 1;

                while($song = mysqli_fetch_array($query)){
                    echo '<tr>';

                        echo '<td><h3>'.$no.'</h3></td>';
                        echo '<td class="">
                                <h3>
                                    <a class="text-white" href="read-song.php?id='.$song['id'].'">
                                        '.$song['title'].'
                                    </a>
                                </h3>
                                <a class="text-primary" href="#">
                                    '.$song['genre'].'
                                </a>
                              </td>';
                        echo '<td class="">
                                <h3>
                                    <a class="text-white" href="#">
                                        '.$song['name'].'
                                    </a>
                                </h3>
                                <a class="text-primary" href="#">
                                    '.$song['judul'].'
                                </a>
                              </td>';

                    echo '</tr>';

                    $no++;
                }

            ?>

        </tbody>
    </table>

</div>

<?php include('main_footer.php') ?>