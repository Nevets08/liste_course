<?php 
$title = 'Accueil';
include 'header.php'; 
?>

<div class="alert alert-danger starter-template mt-4 text-center">
    <h1>Pour voir votre liste de course, connectez vous</h1>
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
                    <p class="card-text"><?= $article['products_content'] ?></p>
                    <a href="#" class="btn btn-info">Modifier</a>
                </div>
            </div>
        </div>

<?php endforeach ?>

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