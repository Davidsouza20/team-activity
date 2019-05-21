<?php

include("dbconection.php");
if (isset($_GET['book'])) {
    
}

$book = "john";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="index.js"></script>
</head>
<body>
    Book: <input type="text" name="book"><br>
    <input class="btn btn-success" onclick= "search()"  type="button" value="Search">
   
    <div id="demo"></div>

   
<?php
$book = "John";
foreach ($db->query("SELECT * FROM scriptures_table WHERE book=$book") as $row) {
    echo '<p>';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';

    echo '"' . $row['content'] . '"';
    echo '</p>';
}





?>
</body>
</html>

