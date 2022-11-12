<!-- Display the pattern like below:
* * * * *
 * * * *
  * * *
  * * *
   * *
    * -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        for($i=1;$i<=6;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo "&nbsp;&nbsp;";
            }
            for($k=1;$k<=6-$i;$k++)
            {
                echo "*&nbsp;&nbsp;";
            }
            echo "<br>";
        }
 
    ?>
    
</body>
</html>