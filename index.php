<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


</head>
<body>
    Book: <input type="text" name="book"><br>
    <input class="btn btn-success" onclick= "search()"  type="button" value="Search">
    <script>
    function search() {
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "search.php", true);
  xhttp.send();
  }
    
  
  </script>
    <div id="demo"></div>
</body>
</html>

