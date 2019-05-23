<?php 
    session_start();
    //echo $_SESSION['content'];
    $id = $_SESSION['content'];

    $query = "SELECT * 
            FROM scriptures_table 
            WHERE id = $id";

    echo "<h1>Scripture Resources</h1>";
    echo '<p class="m-3" href="details.php">';
    echo '<strong>' . $id['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $id['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $id['verse'] . '</strong>' . '&nbsp;' . '-';
  
    echo '"' . $id['content'] . '"';
    echo '</p><br>';


/*foreach ($db->query($query) as $row) {
    echo '<p class="m-3" href="details.php">';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';
  
    echo '"' . $row['content'] . '"';
    echo '</p><br>';*/
}

?>