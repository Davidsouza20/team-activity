<?php 
$query = "SELECT * 
FROM scriptures_table 
WHERE LOWER(book)=" ."LOWER('" . $book ."')";

foreach ($db->query($query) as $row) {
echo '<a class="m-3" href="details.php">';
echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

echo '<strong>' . $row['chapter'] . '</strong>' . ':';

echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';

//echo '"' . $row['content'] . '"';
echo '</a><br>';
}


?>