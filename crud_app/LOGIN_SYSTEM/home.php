<?php include('include.header.php'); ?>
<?php session_start(); ?>
<?php

if(isset($_SESSION['uname'])){
    echo "<h2>HEllo ".$_SESSION['uname']."</h2>";
}
else{
    header('location:index.php?message=You need to log in to enter the site');
}
?>

<a href="include/logout_process.php" class="btn btn-danger">LogOut</a>



<?php include('include.footer.php'); ?>