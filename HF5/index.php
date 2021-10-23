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
        <h3>Online conference registration</h3>

        <form method="post" action="index.php" enctype="multipart/form-data" >
            <label for="fname"> First name:
                <input type="text" name="firstName">
            </label>
            <br><br>
            <label for="lname"> Last name:
                <input type="text" name="lastName">
            </label>
            <br><br>
            <label for="email"> E-mail:
                <input type="text" name="email">
            </label>
            <br><br>
            <label for="attend"> I will attend:<br>
                <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
                <input type="checkbox" name="attend[]" value="Event2">Event2<br>
                <input type="checkbox" name="attend[]" value="Event3">Event2<br>
                <input type="checkbox" name="attend[]" value="Event4">Event3<br>
            </label>
            <br><br>
            <label for="tshirt"> What's your T-Shirt size?<br>
                <select name="tshirt">
                    <option value="P">Please select</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </label>
            <br><br>
            <label for="abstract"> Upload your abstract<br>
                <input type = "file" name = "fileToUpload"/>
            </label>
            <br><br>
            <input type="checkbox" name="terms" value="yes">I agree to terms & conditions.<br>
            <br><br>
            <input type="submit" name="submit" value="Send registration"/>
        </form>

        <?php
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            
            if(isset($_POST["submit"])){
                $firstname=$_POST['firstName'];
                $lastname = $_POST['lastName'];
                $email = $_POST['email'];
              
                
                if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($_POST["attend"]) && !empty($_POST["tshirt"])  && !empty($_POST["terms"])){
                    echo "Vezeteknev: " . $firstname . "<br>";
                    echo "Keresznev: " . $lastname . "<br>";
                    echo "Email: " . $email . "<br>";
                    echo "A kivalastott eventek: ";
                     foreach($_POST["attend"] as $value){
                        echo "value : ".$value.'<br/>';
                    }
                    $selected = $_POST['tshirt'];
                    echo "a valasztott meret: " . $selected . "<br>";
                    
                    echo "A kivalasztott file: <br>";
                    
                    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                      echo " " . $check["mime"] . ".";
                      $uploadOk = 1;
                    } else {
                      echo "nem jo a file";
                      $uploadOk = 0;
                    }
                    if ($_FILES["fileToUpload"]["size"] > 300000) {
                        echo "a file tul nagy";
                        $uploadOk = 0;
                    }
                    if($FileType != "pdf") {
                          echo "a file nem pdf";
                          $uploadOk = 0;
                    }
                    print_r();
                    
                    echo "I agree to terms & conditions.". $_POST['terms'] . "<br>";
                }
                else {
                    echo "Adjon meg minden szukseges adatot";
                }
            }
        ?>
    </body>
</html>

