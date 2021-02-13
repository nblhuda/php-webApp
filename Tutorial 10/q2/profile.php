<html>
    <body>
        <?php
             $name = (isset($_POST['name']) ? $_POST['name'] : ''); 
             $height = (isset($_POST['height']) ? $_POST['height'] : ''); 
             $weight = (isset($_POST['weight']) ? $_POST['weight'] : ''); 
        ?>
        <form action="view.php" method="post">
            <fieldset>
                <legend>BMI Calculator</legend>
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $name;?>"><br>
                <label for="height">Height(Meter):</label>
                <input type="text" name="height" value="<?php echo $height;?>"><br>
                <label for="weight">Weight(Kg):</label>
                <input type="text" name="weight" value="<?php echo $weight;?>"><br>
                <input style="margin-left:60px"  type="submit" value="Save">
            </fieldset>
        </form>
    </body>
</html>
