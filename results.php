<?php 
require_once 'layout/nav.php';
require_once 'functions/functions.php';
require_once 'data/library.php';

$search = strtolower($_GET['q']);
// To redirect to home in case of empty parameter
if(!isset($search)){
    header('Location: search.php'); // Rediriger avec un message d'erreur pour plus tard
    exit;
}


// Conversion to lowercase to make the search case-insensitive
$results = array_filter($libraryGames, fn ($game)=> str_contains(strtolower($game['gameName']), $search));



require_once 'layout/header.php';?>
<a class= "text-decoration-none text-black d-block ms-5 mt-5" href="search.php"><svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Revenir à la recherche</a>
<h2 class="text-center mt-5">Résultats de la recherche pour "<?php echo $search; ?>" :</h2>
<h3 class="text-center"><?php displayResult($results)?></h3>


<section class="container bg-dark text-light p-5 mt-5 rounded">
    <div class="row justify-content-center gap-5">
    <?php foreach ($results as $result) { ?>
            <div class="col-md-3 border rounded px-0 vignette">
                <h4 class="text-center fs-5 my-2 rounded"><?php echo $result['gameName'] ?></h4>
                    <img class="img-fluid rounded" src="<?php echo $result['picture'] ?>" alt="">
                <div class="ps-2">
                    <div class="d-flex justify-content-around mt-3">
                        <span class="bg-warning px-2 py-1 rounded"><?php echo $result['category']?></span>
                        <span class="bg-success px-4 py-1 rounded"><?php echo $result['platform']?></span>
                    </div>
                    <hr class="w-50 mx-auto">
                    <div class="mt-3 fs-6 p-2">
                        <?php echo excerpt($result['description'], 150)?> ...
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</section>

<?php require_once 'layout/footer.php';?>