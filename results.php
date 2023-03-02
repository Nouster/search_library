<?php require_once 'data/library.php';
['q' => $search] = $_GET;
$search = strtolower($search);
// var_dump($_GET);

// Conversion en miniscule pour rendre la recherche insensible à la casse
$results = array_filter($libraryGames, fn ($game)=> str_contains(strtolower($game['gameName']), $search));

require_once 'layout/header.php';?>

<h2>Résultats de la recherche pour "<?php echo $search; ?>" :</h2>
<!-- Rendre l'orthographe dynamique -->
<h3><?php echo count($results) ?> résultat<?php echo count($results) > 1 ? "s":"" ?> trouvé<?php echo count($results) > 1 ? "s":""?></h3>


<section class="container">
    <?php foreach ($results as $result) { ?>
        <div class="row">
            <div class="col-md-6">
                <h4><?php echo $result['gameName'] ?></h4>
            </div>
        </div>
    <?php } ?>
</section>