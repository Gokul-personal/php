
<?php
// DB credentials.
define('DB_HOST', 'phpwebapp12-server.mysql.database.azure.com');
define('DB_USER', 'effgbmnsbi');
define('DB_PASS', '4J1388265ZXQ8804$');
define('DB_NAME', 'phpwebapp12-database');

// Establish database connection.
try {
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS,
        array_merge($sslOptions, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"])
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
