<?php '../vendor/autoload.php';

$router  = new AltoRouter();

// DEFINITION DES CONSTANTES
define('VIEW_PATH',  dirname(__DIR__) . '/views');
// GESTION DE URL
$router->map('GET','/blog', function(){
    // REMONTER D'UN DOSSIER
    require VIEW_PATH .'/post/index.php';
});
$router->map('GET','/blog/category', function(){
    // REMONTER D'UN DOSSIER
    require VIEW_PATH .'/category/show.php';
});

// DEMANDER SI L'URL CREER ACTUELLEMENT CORRESPOND A UN DE CES ROUTE

