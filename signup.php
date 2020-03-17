<?php 
$title = 'S\'inscrire';
include 'header.php'; 
?>
<?php

$pdo = new PDO('mysql:host=localhost;dbname=liste_course;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

?>

<h1 class="mt-4">S'inscrire</h1>

<form action="" method="POST">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom / prénom</label>
    <input type="name" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-info">Valider</button>
</form>

<?php 

var_dump($_POST['mail']);

/*
if(!isset($_POST['mail'])) {
  echo "<p>votre mail est $_POST['mail']</p>";
}
*/