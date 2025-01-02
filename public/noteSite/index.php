<?php

require 'functions.php';
require 'Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

//$query = "SELECT * FROM posts WHERE id = {$id}";
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

