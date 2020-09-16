<?php


if(isset($_POST['Username'])){
   
    
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $co = mysqli_connect("localhost","root","","neat");
    $query = "INSERT INTO `user`( `Username`, `email`, `password`) VALUES ('$Username',' $email','$password')";
    mysqli_query($co,$query);
    if($_POST['Username']){
        header("LOCATION:select.php");
    }else{
        header("LOCATION:index.html");
    }
    
    
}
