<?php require_once 'data/library.php';
['q' => $search] = $_GET;

// var_dump($_GET);

$results = array_filter($libraryGames, fn ($game)=> str_contains($game['gameName'], $search));

require_once 'layout/header.php';?>

<h2>Résultats de la recherche pour "<?php echo $search; ?>" :</h2>
<h3><?php echo count($results) ?> résultat trouvé</h3>


<section class="container">
    <?php foreach ($results as $result) { ?>
        <div class="row">
            <div class="col-md-6">
                <h4><?php echo $result['gameName'] ?></h4>
            </div>
        </div>
    <?php } ?>
</section>