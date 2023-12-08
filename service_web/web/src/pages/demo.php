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

$stmt = $conn->query($sql);
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
        <script type = "text/javascript" language = "javascript">
            /*$(document).ready(function() {
                $("p").html("<i>Assume we can work alongside an old version of jQuery???</i>");
            });*/
        </script>
        <button>Save order</button>
        <ul id="sortable">
        <?php while (($row = $stmt->fetchAssociative()) !== false):  ?>
            <?php
                // var_dump($row['id']);
                // var_dump($row['position']);
                // var_dump($row['article']);
            ?>
            <li id="article-<?php echo $row['id']; ?>" class="ui-state-default"><?php echo 'pos: ', $row['position'] ?? 'NULL', ', ', $row['article']; ?></li>
        <?php endwhile; ?>
        </ul>
        <p></p>
    </body>
</html>

