<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php

if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
}

$query = "select * from 'users' where 'username' = '$username' and 'email_id' = '$email'";

$result = mysqli_query($conn, $query);

if(!$result){
    die("Query Failed".mysqli_error());
}
else{
    $row = mysqli_num_rows($result);
    echo $row; 

    if($row == 1 ){
        $_SESSION['uname'] = $username;
        header('location:../home.php');
    }
    else{
        header('location:../hindex.php?message=Sorry your username or email is is invalid');
    }
}

?>