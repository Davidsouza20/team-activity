<?php

include("dbconection.php");


$book = "john";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Book: <input type="text" name="book"><br>
    <input class="btn btn-success" type="submit" value="Search">
    </form>
    <div id="demo"></div>

   
<?php
$boo = "john";

echo $_POST['book'];

//make the fisrt letter Uppercase
$book = ucfirst($boo);


$query = "SELECT * FROM scriptures_table WHERE book=" ."'" . $book ."'";

foreach ($db->query($query) as $row) {
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

