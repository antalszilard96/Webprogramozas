<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if (isset($_POST['submit'])) {
            $nev = $_POST['nev'];
            $ar = $_POST['ar'];
            $tipus = $_POST['tipus'];
            $filename = $_FILES["img"]["name"];
            $tempname = $_FILES["img"]["tmp_name"];    
            $folder = "image/".$filename;
                  
            $conn = mysqli_connect("localhost", "root", "", "ruhak");
          
                // Get all the submitted data from the form
                $sql = "INSERT INTO ruhak (nev, ar, tipus, kep) VALUES ('$nev','$ar', '$tipus', '$filename')";
          
                // Execute query
                //mysqli_query($conn, $sql);
                  
                // Now let's move the uploaded image into the folder: image
                if (move_uploaded_file($tempname, $folder))  {
                    echo "kap mentese sikeres!" . "<br>";
                }
                if ($conn->query($sql)) {
                    echo "A beszúrás sikerült!" . "<br>";
                    echo "<a href='listazas.php'>Listázás</a>";
                    $conn->close();
                }
                else{
                    die("Sikertelen beszúrás: " . $conn->error);
              }
          }
        else{
            // formot megmutat:
            ?>

            <form method="post" enctype="multipart/form-data">
                Nev:<input type="Text" name="nev"><br>
                Ar:<input type="Text" name="ar"><br>
                Tipus:<input type="Text" name="tipus"><br>
                Kep:<input type="file" name="img" id="img"> <br>
                <input type="Submit" name="submit" value="Elkuld">
            </form>

            <?php
        } // end if
        ?>

    </body>
</html>
