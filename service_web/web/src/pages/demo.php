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
$sql = "SELECT * FROM articles";
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
            <li id="foo_<?php echo $row['id']; ?>"class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo $row['id'], ' ', $row['article']; ?></li>
        <?php endwhile; ?>
        </ul>
        <p></p>
    </body>
</html>

