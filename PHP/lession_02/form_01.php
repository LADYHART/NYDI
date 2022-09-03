<html>
<head>
  <title>Title of the document</title>
</head>

<body>
  <form action="index.php" method="get">
  <label>Your name:</label>
  <input type="text" name="xvar"/>
  <button>Submit</button>
  </form>

<?php
/****************/
$name = '';

if(isset($_GET['xvar'])){
$name = $_GET['xvar'];
}
?>

<h2>

<?php 
/****************/
echo $name;
?>

</h2>
</body>
</html>