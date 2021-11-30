<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    vasarlo id: <input type="number" name="id">
    <input type="submit" name="submit" value="szamol">
</form>

<?php
if (isset($_GET['id'])) {

    $url='https://fakestoreapi.com/carts/user/' . $_GET['id'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response_json, true);

    $url='https://fakestoreapi.com/products/';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response1 = json_decode($response_json, true);
    

    $sum = 0;

    echo "Vasarlo: " . $_GET['id'] .  " Kosarszam: " . count($response) . "<br><br>";
    foreach ($response as $carts) {
        echo "Kosar" . $carts['id'] . "<br>";
        foreach ($carts['products'] as $prod) {
            echo "Termek id: " . $prod['productId'] . "---- Mennyiseg: " . " " . $prod['quantity'];
            foreach ($response1 as $allProd) {
                if ($prod['productId'] === $allProd['id']) {
                    echo "--- Ar: " . $allProd['price'] . " RON <br>";
                    $sum += $allProd['price'] * $prod['quantity'];
                }
            }
        }
        echo "<br>";
    }

    echo "vasarlo: " . $_GET['id'] . "  kosarosszertek: " . $sum . "<br><br>";

}


?>

