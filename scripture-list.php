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
foreach ($_POST['topic'] as $topic) {
    $scriptureId = $db->lastInsertId('scriptures_table_id_seq');
    $query = 'INSERT INTO link_topic_to_scripture (topicid, scriptureid) VALUES (:topicID, :scriptureID)'; 
    $stmt = $db->prepare($query);
    $stmt->bindValue(':scriptureID', $scriptureId, PDO::PARAM_INT);
    $stmt->bindValue(':topicID', $topic, PDO::PARAM_INT);
    $stmt->execute();
    
}

$query1 = 'SELECT id, book, chapter, verse, content FROM scriptures_table';
foreach ($db->query($query1) as $row) {
    $id = $row['id'];
    
    echo '<p class="m-3" href="details.php?id='.$id. '">';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;';

    echo $row['content']. '&nbsp;';

   

    
    // get the topics now for this scripture
	$stmtTopics = $db->prepare('SELECT name FROM topic t
        INNER JOIN link_topic_to_scripture st ON st.topicid = t.id
        WHERE st.scriptureid = :scriptureId');
    $stmtTopics->bindValue(':scriptureId', $id);
    $stmtTopics->execute();
    
    // Go through each topic in the result
    while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
    {
        echo '<br>';
        echo '<strong>' . $topicRow['name'] . ' ' .'</strong>';
    }
    echo '</p>';
}
die();

?>