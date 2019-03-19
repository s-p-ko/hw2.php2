<?php
require __DIR__ . '/../../autoload.php';

use App\Models\Article;

$data = Article::findById($_GET['id']);

//Block for the future answer 'Error 404'
//if (false == $data) {
//    header('Location: /');
//    exit();
//}
include __DIR__ . '/../../templates/article.php';