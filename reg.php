<?php
 require_once('rr.php');
 $email = $_POST["email"];
$name = $_POST["full_name"];
$nickname = $_POST["nickname"];    
$password = $_POST["password"];
$repeatpass = $_POST["password2"];


if(isset($name, $password, $repeatpass, $email, $nickname)
&& strlen($name)>2 && strlen($password)>2 && strlen($repeatpass)>2 && strlen($email)>2 && strlen($nickname)>2){

    if($password !== $repeatpass){
        header("LOCATION:http://akkasa?error=2");
        exit();
    }
    
    $sql="SELECT * FROM `users` WHERE email = '$email'";
    $user_check = mysqli_query($conn, $sql);

    if(mysqli_num_rows($user_check) > 0){
    header("location:https://akkasa?error=3");
    exit();
 }
$sql = "INSERT INTO `users` (name,pass,repeatpass,email,nickname) VALUES ('$name', '$password', '$repeatpass', '$email', '$nickname')";


if ($conn){
    header("LOCATION:http://akkasa");
}

} else{
    header("location:http://akkasa?error=1");
exit();
}