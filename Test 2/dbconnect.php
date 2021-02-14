<?php
    //connection to mySQL
    $host="localhost";
    $username="root"; //test
    $password=""; //test123
    $link = mysqli_connect($host,$username,$password)or die("Could not connect"); //1m
    $db = mysqli_select_db( $link,"dbbmi")or die("Could not select database"); //1m
?>

