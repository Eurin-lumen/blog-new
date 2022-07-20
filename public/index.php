<?php '../vendor/autoload.php';

$router  = new AltoRouter();
// GESTION DE URL
$router->map('GET','/blog', function(){
    // REMONTER D'UN DOSSIER
    require dirname(__DIR__) . '/views/post/index.php';
});
$router->map('GET','/blog/category', function(){
    // REMONTER D'UN DOSSIER
    require dirname(__DIR__) . '/views/category/show.php';
});
