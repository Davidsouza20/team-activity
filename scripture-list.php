<?php
include("dbconection.php");
$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];

$query = 'INSERT INTO scriptures_table (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)'; 
      
      
$stmt = $db->prepare($query);
$stmt->bindValue(':book', $book, PDO::PARAM_STR);
$stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
$stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->execute();

$scriptureId = $db->lastInsertId('scriptures_table_id_seq');
die();

foreach ($_POST['topic'] as $topic) {
    echo $topic;
    $query = 'INSERT INTO link_topic_to_scripture (topicid, scriptureid) VALUES (:topicID, :scriptureID)'; 
    $stmt = $db->prepare($query);
    $stmt->bindValue(':scriptureID', $scriptureId, PDO::PARAM_INT);
    $stmt->bindValue(':topicID', $topic, PDO::PARAM_INT);
    $stmt->execute();
    die();
}





$query = "SELECT * FROM scriptures_table"; 


/*s INNER JOIN link_topic_to_scripture lt ON s.id = lt.scriptureid";*/


foreach ($db->query($query) as $row) {
    $id = $row['id'];

    echo '<p class="m-3" href="details.php?id='.$id. '">';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;';

    echo $row['content']. '&nbsp;';

    echo '</p><br>';
}


?>