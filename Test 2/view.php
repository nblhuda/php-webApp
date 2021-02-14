<?php
    include 'dbconnect.php';
    $query="Select * from data order by name Asc";
    $result = mysqli_query($link,$query) or die ("Query failed");
?>

<table width="493" border="1">
    <tr>
    <th>Bil</th>
    <th>Name</th>
    <th>BMI</th>
    <th>Status</th>
    <th>Action</th>
    </tr>


    <?php
        $x=0;
        $status = "";
        $weight = $row['weight'];
        $height = $row['height'];

            $bmi = $weight/($height*$height);
        while($row = mysqli_fetch_array($result)){
            if($value<18.5){
                $status="Uderweight";
            }
            else if($value >= 18.5 && $value < 25){
                $status="Normal weight";
            }
            else if($value >= 25 && $value < 30){
                $status="Overweight";
            }
            else{
                $status="Obesity";
            }
    ?>

    <tr>
        <td><?php echo $x=$x+1;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $value ?></td>
        <td><?php echo $status?></td>
        <td>
            <a href="view_detail.php?id=<?php echo $row['id']?>">Detail</a>
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
        </td>
    </tr>

    <?php } ?>
</table>