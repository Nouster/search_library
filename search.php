<?php require_once 'layout/header.php'; ?>



<h1 id="app" class="col-lg-12 text-center text-black display-5 py-5"></h1>

<form class="row justify-content-center mt-5" action="results.php" method="GET">

    <input class="col-md-6 rounded me-2" type="text" name="q" id="" placeholder="🔍" value="<?php echo $_GET['q'] ?? ''; ?>">
    <input class="col-md-1 rounded" type="submit" value="Rechercher">
    
</form>

<?php require_once 'layout/footer.php'; 

?>


