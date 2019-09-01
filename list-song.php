<?php 
$home = 'page';
$page = 'song';
include('header.php') ?>
<br> <br>

<div class="container">
    <h1>Song List</h1>
    
    <table class="table table-borderless table-hover">
        <tbody> 
        
            <?php
                $sql    =  'SELECT artists.artist_id, artists.name, genres.genre_id, genres.genre, albums.album_id, albums.judul, songs.id, songs.title, songs.lyrics, songs.artist_id, songs.album_id
                            FROM songs
                            LEFT JOIN artists ON songs.artist_id = artists.artist_id
                            LEFT JOIN albums ON songs.album_id = albums.album_id
                            LEFT JOIN genres ON songs.genre_id = genres.genre_id';
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
                                <a class="text-primary" href="read-genre.php?id='.$song['genre_id'].'">
                                    '.$song['genre'].'
                                </a>
                              </td>';
                        echo '<td class="">
                                <h3>
                                    <a class="text-dark" href="read-artist.php?id='.$song['artist_id'].'">
                                        '.$song['name'].'
                                    </a>
                                </h3>
                                <a class="text-primary" href="read-album.php?id='.$song['album_id'].'">
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