<?php

include("dbconection.php");
if (isset($_GET['book'])) {
    echo $_GET['book'];
}



/*foreach ($db->query("SELECT $book FROM scriptures_table") as $row) {
    echo '<p>';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';

    echo '"' . $row['content'] . '"';
    echo '</p>';
}*/





?>