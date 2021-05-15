<?php 
if(!isset($_COOKIE["login"]))
	header("location:index.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <h1> Welcome to page 3 </h1>
    <a href="page1.php"><h2><font color="">PAGE 1</font></h2>
    <a href="page2.php"><h2><font color="">PAGE 2</font></h2>
    <a href="page3.php"><h2><font color="">PAGE 3</font></h2>



    <a href="logout.php"><h2><font color="red">Logout</font></h2>
</body>
</html>