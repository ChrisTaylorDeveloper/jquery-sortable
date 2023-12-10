<?php
use Doctrine\DBAL\DriverManager;
$params = [
    'dbname' => 'opk247',
    'user' => 'opk247_usr',
    'password' => 'usr_pass',
    'host' => 'db',
    'driver' => 'pdo_mysql',
];
$conn = DriverManager::getConnection($params);

$articles_post = $request->request->get('articles'); //var_dump($articles_post);
parse_str($articles_post, $articles); //var_dump($articles); die;

$sql = "UPDATE articles SET position = NULL";
$conn->query($sql);

$i = 1;
foreach ($articles['article'] as $id) {
    $sql = "UPDATE articles SET position = $i WHERE id = $id";
    $conn->query($sql);
    $i++;
}