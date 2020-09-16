<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
   
    $do = mysqli_connect("localhost","root","","neat");
    $deletequery = "DELETE FROM `user` WHERE `id`= $id";
    mysqli_query($do,$deletequery);

    header("LOCATION:select.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form class="two"  action="delete.php" method="post">
        <input type="text" name="id" placeholder="id">
        <input type="submit" value="send">
    </form>
    
</body>
</html>