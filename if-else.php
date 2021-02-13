<html>
    <body>
        <?php
            $d=Date("D");

            if($d=="Sat")
                echo "Have a nice weekend";

            else
            {
                echo "Have a nice day! ";
                echo "Today is " .$d;
            }
        ?>
    </body>
</html>