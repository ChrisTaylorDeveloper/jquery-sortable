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
$articles = json_decode($articles_post);

$sql = "UPDATE article_b SET position = NULL";
$conn->query($sql);

$i = 1;
foreach ($articles as $id) {
    $sql = "UPDATE article_b SET position = $i WHERE id = $id";
    $conn->query($sql);
    $i++;
}