<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $Username = $_POST['Username'];
   
    $uo = mysqli_connect("localhost","root","","neat");
    $updatequery = " UPDATE `user` SET `Username`=  '$Username' WHERE `id`= $id";
    mysqli_query($uo,$updatequery);
    if($_POST['id']){
        header("LOCATION:select.php");
    }else{
        header("LOCATION:index.html");
    }
    
    
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
    <form class="two"  action="update.php" method="post">
        <input type="text" name="id" placeholder="id">
        <input type="text" name="Username" placeholder="Username">
        <input type="submit" value="Update">
    </form>
    
</body>
</html>