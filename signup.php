<?php 

$title = 'S\'inscrire';
include 'header.php'; 

?>

<h1 class="mt-4">S'inscrire</h1>

<form action="" method="POST">
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" class="form-control" name="mail" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom / prénom</label>
    <input type="name" class="form-control" name="name" id="exampleInputPassword1" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-info">Valider</button>
</form>

<?php

$mail = null;
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
}

$name = null;
if (isset($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
}

$password = null;
if (isset($_POST['password'])) {
  $password = htmlspecialchars($_POST['password']);
}

$_SESSION["user"] = [
  'mail' => $mail,
  'name' => $name,
  'password' => $password,
];
?>

<?php



$pdo = new PDO('mysql:host=localhost;dbname=liste_course;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$mail = null;
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
}

$name = null;
if (isset($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
}

$password = null;
if (isset($_POST['password'])) {
  $password = htmlspecialchars($_POST['password']);
}

$request = $pdo->prepare('INSERT INTO user(name_user, mail_user, password_user) VALUES(:mail,:name,:password)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$request->bindValue(':mail', $mail); 
$request->bindValue(':name', $name);
$request->bindValue(':password', $password);
//On exécute la requête
$request->execute();


/*
if(!isset($_POST['mail'])) {
  echo "<p>votre mail est $_POST['mail']</p>";
}
*/