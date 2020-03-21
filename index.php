<?php 
$title = 'Accueil';
include 'header.php'; 
?>

<div class="alert alert-danger starter-template mt-4 text-center">
    <h1>Pour voir vos listes de course, connectez vous</h1>
</div>

<?php

/**
 * 1. Connexion bdd
 */
$pdo = new PDO('mysql:host=localhost;dbname=liste_course;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * 2. Récupération des articles
 */

$resultats = $pdo->query('SELECT * FROM content ORDER BY id DESC');
$articles = $resultats->fetchAll();

foreach ($articles as $article) : ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title_content'] ?></h5>
                    <p class="card-text"><?php  if(strlen($article['products_content']) >= 100) {
                                                    echo substr($article['products_content'],0,100)." ...";
                                                } else {
                                                    echo $article['products_content'];
                                                } ?></p>

                    <a href="show_article.php?id=<?= $article['id'] ?>" class="btn btn-info">Voir plus</a>
                    <a href="delete_article.php?id=<?= $article['id'] ?>" onclick="return window.confirm(`Voulez-vous vraiment supprimer la liste <?= $article['title_content'] ?>`)" class="btn btn-danger ml-2">Supprimer</a>
                </div>
            </div>
        </div>

<?php endforeach ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?
/**
 * 3. Affichage
 */

// ob_start();
// require('templates/articles/index.html.php');
// $pageContent = ob_get_clean();

// require('templates/layout.html.php');


include 'footer.php'; 
?>

