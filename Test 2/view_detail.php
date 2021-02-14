<!DOCTYPE html>
    <title>View</title>
    </head>
    <body>
        <?php
            include 'dbconnect.php'; // 0.5m
            $id=$_GET['id'];
            $query="SELECT * FROM data WHERE id='$id'"; // 1m
            $result = mysqli_query( $link,$query) or die("Query failed"); // 1m
            $user = mysqli_fetch_array( $result ); // 0.5m
            echo "ID :". $user['id']."</br>"; // 0.5m
            echo "NAME :". $user['name']."</br>"; // 0.5m
            echo "HEIGHT :". $user['height']."</br>"; // 0.5m
            echo "WEIGHT :". $user['weight']; // 0.5m
        ?>
    </body>
</html>