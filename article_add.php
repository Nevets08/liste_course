<?php 
$title = 'Créer une nouvelle liste';
include 'header.php'; 
?>

<h1 class="mt-4">Créer une nouvelle liste de courses</h1>

<form action="" method="POST">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Titre *</label>
    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Produits à acheter *</label>
    <textarea class="form-control" name="products" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Commentaires</label>
    <input type="text" class="form-control" name="comments" aria-describedby="emailHelp">
  </div>
  <p><small>* Champs obligatoires</small></p>
  <button type="submit" class="btn btn-info">Valider</button>
</form>

<?php 

$title = null;
if (isset($_POST['title'])) {
    $title = htmlspecialchars($_POST['title']);
}

$products = null;
if (isset($_POST['products'])) {
  $products = htmlspecialchars($_POST['products']);
}

$comments = null;
if (isset($_POST['comments'])) {
  $comments = htmlspecialchars($_POST['comments']);
}

$pdo = new PDO('mysql:host=localhost;dbname=liste_course;charset=utf8', 'root', '', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$request = $pdo->prepare('INSERT INTO content(title_content, products_content, comments_content) VALUES(:title,:products,:comments)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$request->bindValue(':title', $title); 
$request->bindValue(':products', $products);
$request->bindValue(':comments', $comments);
//On exécute la requête
$request->execute();

if ($title && $products) {
  ?> <div class="alert alert-success mt-3" role="alert">
    La liste <strong><?php echo $title; ?></strong> à été créée !
  </div> <?php
} else {
  ?> <div class="alert alert-danger mt-3" role="alert">
  Erreur : Veuillez recommencer
</div> <?php 
}

?>