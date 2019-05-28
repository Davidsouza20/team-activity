<?php
include("dbconection.php");
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];


$query = "INSERT INTO scriptures_table ('book', 'chapter', 'verse') VALUES ('$book', '$chapter', '$verse', '$content')"; 

echo $query;

foreach ($_POST['topic'] as $topic) {
    echo $topic;
}





?>
