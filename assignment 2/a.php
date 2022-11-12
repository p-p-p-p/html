<!-- Display the pattern like below:
*
* *
* * *
* * * *
* * * * * -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        for($i=1;$i<=5;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
    
</body>
</html>