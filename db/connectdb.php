<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $db = mysqli_connect('localhost','root','','teamprojectblog');
?>
</body>

<?php
$query = "SELECT * FROM posts";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);
echo $result;
?>
</html>
