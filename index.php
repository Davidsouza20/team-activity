<?php


include("dbconection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body >
    <form class="m-3 form-group mx-auto" action="" method="post">
    Book: <input class="m-2" type="text" name="book"><br>
    <input class="btn btn-success m-2" type="submit" value="Search">
    </form>
 
<?php
$book = $_POST['book'];          

$query = "SELECT * 
            FROM scriptures_table 
            WHERE LOWER(book)=" ."LOWER('" . $book ."')";


foreach ($db->query($query) as $row) {
    $id = $row['id'];

    echo '<a class="m-3" href="details.php?id='.$id. '">';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';

    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;';

    echo '</a><br>';
}





?>
</body>
</html>

