<?php
include("dbconection.php");
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$query = "INSERT INTO scriptures_table ('book', 'chapter', 'verse') VALUES ('$book', '$chapter', '$verse', '$content')"; 
$result = pg_query($db, $query);
if(!$result) {
    echo pg_last_error($db);
 } else {
    echo "Records created successfully\n";
 }
 pg_close($db);
foreach ($_POST['topic'] as $topic) {
    echo $topic;
}
?>