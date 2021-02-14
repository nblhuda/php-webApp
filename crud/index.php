<html>
    <head></head>
    <body>
    <?php include 'process.php' ?>

    <?php
        if(isset($_SESSION['message'])):
    ?>

    <div class="alert-<?=$_SESSION['msg_type']?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);

            ?>
    </div>
    <?php endif ?>

    <?php
        $mysqli = new mysqli("localhost", "root", "", "crudphp") or die (mysqli_error($mysqli)); 
        $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
        //pre_r($result);

        // to fetch record nak check betul tak penyimpanan dalam db
        // pre_r($result->fetch_assoc());
        // pre_r($result->fetch_assoc()); 
        // pre_r($result->fetch_assoc());
        // pre_r($result->fetch_assoc());
        // pre_r($result->fetch_assoc());
        // pre_r($result->fetch_assoc());

        ?>

        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php while($row = $result->fetch_assoc()): ?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>"><button>Edit</button></a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>"><button>Delete</button></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        <?php

        // function pre_r($array){
        //     echo '<pre>';
        //     print_r($array);
        //     echo '</pre>';
        // }
    ?>
        <form action="process.php" method="post">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            <label for="">Location</label>
            <input type="text" name="location" placeholder="Enter your location"><br><br>
            <button type="submit" name="save">Save</button>
        </form>
    </body>
</html>