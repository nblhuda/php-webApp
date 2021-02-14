<html>
  <body>  
    <form method="post">  
        Please input your mark: <input type="text" name="mark"> 
        <br>
        <input type="submit" name="grading" value="Grading">  
    </form>
    <?php //0.25m
        //Retrieve name from query string and store to a local variable
        $mark = $_POST['mark']; //0.5m
        if( $mark > 80 ) //0.5m
          echo "<b>Marks: $mark - (Excellent)<b>"; //0.5m
        else if( $mark > 40 ) //0.5m
          echo "<b>Marks: $mark - (Pass)<b>"; //0.5m
        else //0.5m
          echo "<b>Marks: $mark - (Fail)<b>"; //0.5m
        ?>
  </body>
</html>
