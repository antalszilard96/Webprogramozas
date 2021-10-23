<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php
        echo '1------------------<br>';
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
        $day = date("D");
        echo "<br>";
        switch ($day){
            case "Monday":
                echo "Ma hetfo van";
                break;
            case "Tue":
                echo "Ma kedd van";
                break;
            case "Wed":
                echo "Ma szerda van";
                break;
            case "Thu":
                echo "Ma csutortok van";
                break;
            case "Fri":
                echo "Ma pentek van";
                break;
            case "Sat":
                echo "Ma szombat van";
                break;
            case "Sun":
                echo "Ma vasarnap van";
                break;
        }
        echo '<br>2------------------------<br>';
        $x = 2;
        $y = 3;
        echo "a szamok: " . $x . " es " . $y. "<br>";
        echo $x . "+" . $y . "= " . $x+$y . "<br>";
        echo $x . "-" . $y . "= " . $x-$y . "<br>";
        echo $x . "*" . $y . "= " . $x*$y . "<br>";
        echo $x . "/" . $y . "= " . $x/$y . "<br>";
        
        echo '<br>3------------------------<br>';
        
        for($i=1;$i<=10;$i++){
            echo $i . "/ 1 = " . $i/1 . "<br>";
        }
        echo '<br>5------------------------<br>';
        
        $string = "edfvevrebgvrbvdved";
        echo $string . "<br>";
        $n = strlen($string);
        for($i = 0; $i<$n; $i++){
            if($i%2 == 0){
                echo strtoupper($string[$i]);
            }
            else{
                echo $string[$i];
            }
        }
        
        
        echo '<br>4------------------------<br>';
                for($row=1;$row<=8;$row++){
            echo "<tr>";
            for($col=1;$col<=8;$col++){
                $total=$row+$col;
                if($total%2==0){
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }else{
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
        
        ?>
    </body>
</html>
