<?php

// SCRIPT DE CREATION DE LA BDD DU PORTAIL
$host = "localhost";

$root = "root";
$root_password = "";

$user = 'admin';
$pass = 'admin';
$db = "bddPortail";


// CREATION DE LA BDD
try {
    $dbh = new PDO("mysql:host=$host", $root, $root_password);

    $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;")
            or die(print_r($dbh->errorInfo(), true));
    echo('Base de donnée créée !');
} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}

// CREATION DES TABLES
$table1 = 'utilisateurs';
$fields1 = [
    'id',
    'login',
    'password',
    'infosNavigateur',
    'ipUser',
    'nbreEssaiaConnexion'
];

createdbtable($table1, $fields1);
echo('Table Utilisateurs créée !');

function createdbtable($table, $fields) {
    global $fsdbh;

    $sql = "CREATE TABLE IF NOT EXISTS `$table` (";
    $pk = '';

    foreach ($fields as $field => $type) {
        $sql .= "`$field` $type,";

        if (preg_match('/AUTO_INCREMENT/i', $type)) {
            $pk = $field;
        }
    }

    $sql = rtrim($sql, ',') . ' PRIMARY KEY (`' . $pk . '`)';

    $sql .= ") CHARACTER SET utf8 COLLATE utf8_general_ci";
    return $sql;
    if ($fsdbh->exec($sql) !== false) {
        return 1;
    }
}

?>