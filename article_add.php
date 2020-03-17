<?php 
$title = 'Créer une liste';
include 'header.php'; 
?>

<h1 class="mt-4">Créer une nouvelle liste de courses</h1>

<form action="" method="POST">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" class="form-control" name="title" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Produits à acheter</label>
    <textarea class="form-control" name="products" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Commentaires</label>
    <input type="text" class="form-control" name="comments">
  </div>
  <button type="submit" class="btn btn-info">Valider</button>
</form>

<?php 

/**
 * 1. Connexion bdd
 */
$pdo = new PDO('mysql:host=localhost;dbname=liste_course;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * 2. Ajout du formulaire dans la bdd
 */
$sql = "INSERT INTO content(title, products, comments)
    VALUES (?,?,?)";

$stmt = mysqli_prepare($sql);

$stmt->bind_param("sss", $_POST['title'], $_POST['products'], $_POST['comments']);

$stmt->execute();

?>