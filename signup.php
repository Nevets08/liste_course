<?php 
$title = 'S\'inscrire';
include 'header.php'; 
?>

<h1 class="mt-4">S'inscrire</h1>

<form>
  <div class="form-group mt-4">
    <label for="exampleInputEmail1">Adresse mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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