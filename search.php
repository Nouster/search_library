<?php 
require_once 'layout/header.php';

$curl = curl_init('https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=12d8a10ed4a8966b8d2f0e60baab934a');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ajouter cette option pour retourner la réponse dans une variable

$response = curl_exec($curl);

if ($response === false) {
    var_dump('Impossible de se connecter à openweathermap.org');
} else {
    $data = json_decode($response, true);
    if ($data === null) { // vérifier si la réponse est un JSON valide
        var_dump('Erreur de décodage JSON');
    } else {
        echo '<span>';
        var_dump($data['main']['temp']);
        echo '</span>';
    }
}

curl_close($curl);
?>




<h1 id="app" class="col-lg-12 text-center text-black display-5 py-5"></h1>

<form class="row justify-content-center mt-5" action="results.php" method="GET">

    <input class="col-md-6 rounded me-2" type="text" name="q" id="" placeholder="🔍" value="<?php echo $_GET['q'] ?? ''; ?>">
    <input class="col-md-1 rounded" type="submit" value="Rechercher">
    
</form>

<?php require_once 'layout/footer.php'; 
?>


