<?php require_once 'layout/header.php'; ?>

<h1>Recherche dans ma bibliothèque</h1>
<form action="results.php" method="GET">
    <input type="text" name="q" id="" placeholder="🔍" value="<?php echo $_GET['q'] ?? ''; ?>">
    <input type="submit" value="Rechercher">
</form>

<?php require_once 'layout/footer.php'; 

?>