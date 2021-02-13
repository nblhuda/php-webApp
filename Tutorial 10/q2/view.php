<html>
    <body>

        <?php
            include 'dbconnect.php';
            //Select Database
            $sql = "SELECT * FROM bmi";
            $result = $mysqli->query($sql);
        ?>

        <br> 
        <br>
        <table cellpadding="5"  border="1" align="center"> 
        <tr> 
        <th>Bil</th> 
        <th>Name</th> 
        <th>BMI</th> 
        <th>Status</th> 
        <th>Action</th> 
        </tr> 
        

        <?php
            //Fetch Data form database
            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>

        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>


        <?php 
            $status = "";
            $weight = $row['weight'];
            $height = $row['height'];

            $bmi = $weight/($height*$height);

            if($bmi < 18.5)
            {
                 $status = "Underweight";
            }
            else if($bmi >=18.5 && $bmi <= 24.9)
            {
                $status = "Normal weight";
            }
            else if($bmi >24.9 && $bmi <=29.9)
            {
                $status = "Overweight";
            }
            else
            {
                $status = "Obesity";
            }

        ?>

        <td><?php echo number_format((float)$bmi, 2, '.', ''); ?></td>
        <td><?php echo $status ?></td>
        <td> <a href="profile.php?detail=1&id=<?php echo $row['id']; ?>">Detail</a> |  
        <a href="insert.php?deleted=1&id=<?php echo $row['id']; ?>">Delete</a> 
        </td>
        </tr>
        
        <?php
        }
        }
        else
        {
        ?>
        <tr>
        <th colspan="5">There's No data found!!!</th>
        
        </tr>

        <tr>
        <th colspan="5"><a href="profile.php"><button>Add new data</a> </th>
        </tr>
        <?php
        }
        ?>


    </table> 
    </body>
</html>
