<?php
session_start();

if(isset($_POST['name'])){
    if(!isset($_SESSION['keresettSzam'])){
        
        $_SESSION['keresettSzam'] = rand(1, 10);
        keres($_POST['tipp'],$_SESSION['keresettSzam']);
        
    }
    else{
        
        keres($_POST['tipp'],$_SESSION['keresettSzam']);
    }
}

function keres($tipp, $szam){
    if($_POST['tipp'] >= 1 && $_POST['tipp'] <=10){
        valasz($tipp,$szam);
        echo "<br>";
        
    }
    else{
        echo "1 es 10 kozott tippelj";
    }
    
}

function valasz($tipp,$szam){
    if($tipp > $szam){
        echo "a szam kisebb";
    }
    elseif($tipp < $szam){
        echo "a szam nagyobb";
    }
    else{
        echo "gratulalok eltalaltad";
        unset($_SESSION['keresettSzam']);
    }
}
?>

<form method="POST" action="">
    
    Tippel egy szamra 1 es 10 kozott?
    <input type="text" name="tipp">
    <input type="submit" value="submit">
    <input type="hidden" name="name" value="true">
    
</form>