<html>
  <body>  
    <?php 
        $mark = (isset($_POST['mark']) ? $_POST['mark'] : ''); 
    ?>
  
    <form method="post">  
        Please input your mark: <input type="text" name="mark" value="<?php echo $mark;?>"> 
        <br>
        <input type="submit" name="grading" value="Grading">  
    </form>
 
    <?php 

        $grade = '';

        if((isset($_POST['mark']) ? $_POST['mark'] : ''))
        {
            if($mark>=80 && $mark <=100){
                $grade = 'Excellent';
            }
            elseif($mark>=40 && $mark<80){
                $grade = 'Pass';
            }
            elseif($mark>=0 && $mark<40){
                $grade = 'Fail';
            }
            else{
                $grade = 'Please enter mark between 0-100';
            }
        }
        echo "<b>";
        echo "Marks: ";
        echo $mark; 
        echo " - (";
        echo $grade;
        echo ")";
        echo "</b>";
    ?>

  </body>
</html>
