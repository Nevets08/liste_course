<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>

    <?php if (isset($title)): ?>
        <?= $title ?>
    <?php else: ?>
        Liste de course
    <?php endif; ?>

    </title>
    
    <link rel="icon" href="" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Liste de course</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/index.php'): ?>active<?php endif; ?>">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/signup.php'): ?>active<?php endif; ?>">
                    <a class="nav-link" href="/signup.php">S'inscrire</a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/login.php'): ?>active<?php endif; ?>">
                    <a class="nav-link" href="/login.php">Se connecter</a>
                </li>
                <li class="nav-item <?php if ($_SERVER['SCRIPT_NAME'] === '/article_add.php'): ?>active<?php endif; ?>">
                    <a class="nav-link" href="/article_add.php">Créer une liste</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">