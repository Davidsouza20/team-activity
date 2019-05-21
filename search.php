<?php

include("dbconection.php");
if (isset($_GET['book'])) {
    print($_GET['book']);
}


$term = 'john';
ucfirst($term);


foreach ($db->query("SELECT $term FROM scriptures_table") as $row) {
    echo '<p>';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';

    echo '"' . $row['content'] . '"';
    echo '</p>';
}*/





?>