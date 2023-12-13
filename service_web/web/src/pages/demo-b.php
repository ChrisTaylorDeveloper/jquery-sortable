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

$sql = 'SELECT * FROM article_b ORDER BY position ASC';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CTD | Sortable demo</title>
        <link rel="icon" type="image/x-icon" href="/favicon.png">
    </head>
    <body id="demo-b">
        <script src="/main.js"></script>
        <p><button id="button-b">Save order</button></p>

        <?php $stmt = $conn->query($sql); ?>
        <?php $count=1; ?>

        <div id="demo-b-articles">
        <?php while ($row = $stmt->fetchAssociative()):  ?>
            <div class="article" data-article-id="<?php echo $row['id']; ?>">
                <?php /*echo $count, ' '*/ ?>
                <code class="top">top&nbsp;</code>
                <code class="up-one">up&nbsp;</code>
                <code class="dn-one">down&nbsp;</code>
                <code><?php echo $row['name']; ?></code>
            </div>
            <?php $count++ ?>
        <?php endwhile; ?>
        </div>

    </body>
</html>
