<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        echo '<br>1....<br>';
        $tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
        
        foreach ($tomb as $value){
            if(is_numeric($value)){
                echo 'igen ';
            }else{
                echo 'nem ';
            }
        }
        echo '<br>2....<br>';
        
        $orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
"Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
        foreach($orszagok as $key => $value){
            echo $key . ' fovarosa ' . $value . '<br>';
        }

        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        
        echo '3....<br>';
        
        foreach ($napok as $key =>$value){
            echo '<br>'. $key . ": ";
            for($i = 0;$i<7;$i++){
                if($i==6){
                    echo $napok[$key][$i];
                }
                else{
                    echo $napok[$key][$i] . ', ';
                }
            }
        }
        
        echo '<br> 4...';
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
        
        function atalakit($lista, $mire){
            if($mire === "kisbetus"){
                 foreach ($lista as $value){
                      $value = strtolower($value);
                      echo $value . ' ';
                }
            }
            else if($mire === "nagybetus"){
                foreach ($lista as $value){
                      $value = strtoupper($value);
                      echo $value . ' ';
                }
            }
            else {
                echo 'hiba';
            }
        }
        echo '<br>';
        atalakit($szinek, "nagybetus");
        echo '<br>';
        atalakit($szinek, "kisbetus");
        ?>
    </body>
</html>