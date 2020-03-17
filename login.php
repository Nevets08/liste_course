<?php 
$title = 'Se connecter';
include 'header.php'; 
?>

<h1 class="mt-4">Se connecter</h1>

<small>Si vous n'etes pas inscrit : <a href="/signup.php">inscrivez vous</a></small>

<form>
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-info">Valider</button>
</form>