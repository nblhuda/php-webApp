<?php
    include 'db.connect.php';
    $delete_id=$_GET['id'];
    $query = "DELETE FROM data WHERE id='$delete_id'"; 
    $result = mysqli_query( $link,$query) or die("Query failed");
    if ($result) 
    echo " Delete Successfully ! <a href='view.php'> back to view </a>";
    else
    echo "Problem occured !";
    mysqli_close($link);
?>