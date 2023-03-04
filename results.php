<?php require_once 'data/library.php';

// To redirect to home in case of empty parameter
$search = isset($_GET['q']) ? strtolower($_GET['q']) : header('location : search.php');

// Conversion to lowercase to make the search case-insensitive
$results = array_filter($libraryGames, fn ($game)=> str_contains(strtolower($game['gameName']), $search));
// $results['description'] = substr($results['description'], 0, 250);
foreach ($results as &$result) {
    $result['description'] = substr($result['description'], 0, 150);
  }

//Adapt the spelling to match the search results
function displayResult($results){
    $displayText = ' résultat trouvé';
    if(count($results)>1){
        $displayText = ' résultats trouvés';
        echo count($results) . $displayText;
    }else {
        echo count($results) . $displayText;
    }
}

require_once 'layout/header.php';?>
<a class= "text-decoration-none text-black d-block ms-5 mt-5" href="search.php"><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Revenir à la recherche</a>
<h2 class="text-center mt-5">Résultats de la recherche pour "<?php echo $search; ?>" :</h2>
<h3 class="text-center"><?php displayResult($results)?></h3>


<section class="container mt-5">
    <div class="row justify-content-center gap-2">
    <?php foreach ($results as $result) { ?>
            <div class="col-md-3 border rounded px-0">
                <h4 class="text-center text-light bg-dark rounded"><?php echo $result['gameName'] ?></h4>
                    <img class="img-fluid rounded" src="<?php echo $result['picture'] ?>" alt="">
                <div class="ps-2">
                    <div class="d-flex justify-content-around mt-3">
                        <span class="bg-warning px-2 py-1 rounded"><?php echo $result['category']?></span>
                        <span class="bg-success px-4 py-1 rounded"><?php echo $result['platform']?></span>
                    </div>
                    <div class="mt-3">
                        <?php echo $result['description']?>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</section>