<?php 
$query = "SELECT * 
            FROM scriptures_table 
            WHERE LOWER(book)=" ."'" . LOWER($book) ."'";


?>