<?php 
$home = 'page';
$page = 'song';
include('header.php') ?>
<br>
<br>

<div class="container">
    <h1>Song List</h1>
    
    <table class="table table-borderless table-hover">
        <tbody> 
        
            <?php
                $sql    =  "SELECT artist.artist_id, artist.name, genre.genre_id, genre.genre, album.album_id, album.judul, song.id, song.title, song.lyrics, song.artist_id, song.album_id
                            FROM song
                            LEFT JOIN artist ON song.artist_id = artist.artist_id
                            LEFT JOIN album ON song.album_id = album.album_id
                            LEFT JOIN genre ON song.genre_id = genre.genre_id";
                $query  = mysqli_query($db, $sql);
                $no     = 1;

                while($song = mysqli_fetch_array($query)){
                    echo '<tr>';

                        echo '<td><h3>'.$no.'</h3></td>';
                        echo '<td class="">
                                <h3>
                                    <a class="text-dark" href="read-song.php?id='.$song['id'].'">
                                        '.$song['title'].'
                                    </a>
                                </h3>
                                <a class="text-primary" href="#">
                                    '.$song['genre'].'
                                </a>
                              </td>';
                        echo '<td class="">
                                <h3>
                                    <a class="text-dark" href="#">
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

<!-- 
    SELECT a.field, b.field, c.field 
    FROM aaa AS a 
    INNER JOIN bbb AS b ON b.id = a.b_id 
    INNER JOIN ccc AS c ON c.id = a.c_id 
-->