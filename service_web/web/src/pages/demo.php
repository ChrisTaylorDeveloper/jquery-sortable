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

$sql = <<<SQL
SELECT * FROM (
    SELECT 'a' origin, articles.* FROM articles WHERE position IS NOT NULL
    UNION ALL
    SELECT 'b' origin, articles.* FROM articles WHERE position IS NULL
) q ORDER BY origin ASC, position ASC
SQL;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CTD | Sortable demo</title>
        <link rel="icon" type="image/x-icon" href="/favicon.png">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <script src="/main.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

        <p><button>Save order</button></p>

        <div id="sortable">
        <?php $count = 1; ?>
        <?php $stmt = $conn->query($sql); ?>
        <?php while ($count < 6 ):  ?>
            <?php $row = $stmt->fetchAssociative(); ?>
            <div id="article-<?php echo $row['id']; ?>"><code><?php echo $row['article']; ?></code></div>
            <?php $count++; ?>
        <?php endwhile; ?>
        </div>

        <hr>

        <div id="static">
        <?php while (($row = $stmt->fetchAssociative()) !== false): ?>
            <div id="article-<?php echo $row['id']; ?>"><code><?php echo $row['article']; ?></code><span class="top"><code>&nbsp;top</code></span></div>
            <?php $count++; ?>
        <?php endwhile; ?>
        </div>
    </body>
</html>
