<?php

require 'functions.php';
//require 'router.php';

//connect to our MySql database\ and execute a query

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4';

$pdo = new PDO($dsn, 'root');

$statement = $pdo -> prepare("select * from posts");

$statement ->execute();

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<l'>" . $post['title'] . "</l>";
}
