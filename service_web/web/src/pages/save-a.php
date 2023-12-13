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

$articles_post = $request->request->get('articles');
parse_str($articles_post, $articles);

$sql = "UPDATE article_a SET position = NULL";
$conn->query($sql);

$i = 1;
foreach ($articles['article'] as $id) {
    $sql = "UPDATE article_a SET position = $i WHERE id = $id";
    $conn->query($sql);
    $i++;
}