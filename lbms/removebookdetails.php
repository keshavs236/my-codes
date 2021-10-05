<!--DisplayBooks.php-->
<!DOCTYPE HTML>
<html>
<head>
</head>
<body bgcolor="87ceeb">
<br>
<?php
include 'DBconnection.php';
$search = $_REQUEST["search"];
$query = "delete from book_info where ISBN=$search";
//search with a book name in the table book_info
$result = mysqli_query($db,$query);

?>
</body>
</html>
