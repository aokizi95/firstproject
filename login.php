<?php
require_once('rr.php');


$email = $_POST['email'];
$password = $_POST['password'];




    $sql1 = "SELECT * FROM `users` WHERE Pochta = '$email'";
    $userDB = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($userDB) > 0) {

        $user = mysqli_fetch_assoc($userDB);

     
        if($user['password'] !== $password){
            header("Location: http://suniiii/indexxx.php?error=3");
        } else{
            header("Location: http://suniiii/profile.php");
            exit();
            
        }

        
    }else {
        header("Location: http://suniiii/login.php?error=4");
    exit();
    }


?>