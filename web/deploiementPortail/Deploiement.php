<?php

declare(strict_types = 1);
require('../../vendor/autoload.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors ', '1');
error_reporting(E_ALL);

echo("<h1>Script de déploiement de la base de donnée du portail</h1><br><br><br>");
/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * Ce script est à exécuter lors de la création d'un portail.
 * Il a pour objectif de créer une base de données fonctionnelle pour le portail.
 * 
 * Ce script, protégé par .htaccess est accessible avec les identifiants :
 * login :admin
 * pass  :admin
 * 
 * 
 * 
 * Les variables globales spécifiques à un environnememt 
 * (nom de la base de données, ip/url de la base, nom d'utilisateur...) 
 * sont stockée à la racine du site dans le fichier .env
 * 
 * Ceci permet de ne pas mettre sur git des infos sensibles, 
 * et de ne pas avoir à transmettre les valeurs de production à toute l'équipe de développpement,
 * chaque développeur pouvat travailler en local comme il le souhaite.
 * 
 * Les variables contenues dans ce fichier sont rendues accessibles grâce à la dépendance  : dotEnv
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
$dotenv = Dotenv\Dotenv::create('../../');
$dotenv->load();


$servername = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_DATABASE'];

$usersBasiques = [
    ['b.andrieu', 'ba@ba.fr', '{navigateur}', '111.111.111.111', 1],
    ['p.codron', 'pc@pc.fr', '{navigateur}', '222.222.222.222', 1],
    ['l.dejean', 'ld@ld.fr', '{navigateur}', '333.333.333.333', 2],
];

$cliniquesBasiques = [
    '192.123.000.453',
    '192.200.23.45'
];



/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * Création de la base de données vide :
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP DATABASE IF EXISTS $dbname;"
            . "CREATE DATABASE IF NOT EXISTS $dbname;";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Base de données créée<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;




/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * 
 * 
 * 
 * creation des tables : 
 * 
 * 
 * 
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "DROP TABLE IF EXISTS `users`;
            CREATE TABLE `users` (
            `login` VARCHAR(30) NOT NULL PRIMARY KEY,
            `email` VARCHAR(100) NOT NULL,
            `infosNavigateur` BLOB NOT NULL,
            `ipUser` VARCHAR(30) NOT NULL,
            `fk_id_clinique` INT(11) NOT NULL,
            `dateDeDerniereConnexion` DATETIME DEFAULT NOW()
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

            DROP TABLE IF EXISTS `server_cliniques`;
            CREATE TABLE `server_cliniques` (
            `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
            `urlClinique` VARCHAR(100) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
            
            DROP TABLE IF EXISTS `historique_connexions`;
            CREATE TABLE `historique_connexions` (
            `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,    
            `fk_id_user` VARCHAR(30) NOT NULL,
            `date_de_connexion` DATETIME NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

            ALTER TABLE `users`
            ADD CONSTRAINT `fk_clinique` FOREIGN KEY (`fk_id_clinique`) REFERENCES `server_cliniques` (`id`);
            
            ALTER TABLE `historique_connexions`
            ADD CONSTRAINT `fk_user` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`login`);
            ";

    $conn->exec($sql);
    echo "Tables users et cliniques créées<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;




/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * 
 * Insertion de données de base (A faire depuis l'Active Directory)
 * 
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
$boutDeRequeteClinique = "";
foreach ($cliniquesBasiques as $ipClinique) {
    $boutDeRequeteClinique .= ' ( \'' . $ipClinique . '\' ), ';
}
$boutDeRequeteClinique = substr($boutDeRequeteClinique, 0, -2);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO server_cliniques (urlClinique) 
    VALUES $boutDeRequeteClinique; ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Cliniques créées<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


$boutDeRequeteUser = "";
foreach ($usersBasiques as $user) {
    $user = implode("','", $user);
    $boutDeRequeteUser .= ' ( \'' . $user . '\' ), ';
}
$boutDeRequeteUser = substr($boutDeRequeteUser, 0, -2);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (login, email, infosNavigateur, ipUser, fk_id_clinique)
    VALUES $boutDeRequeteUser; ";
    $conn->exec($sql);
    echo "Utilisateurs créés<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * 
 * Création d'un trigger pour sauvegarder les dates de connexion
 * 
 * A chaque connexion, on stocke la date de connexion 
 * et on archive les 5 dernières dates de connexion
 * 
 * 
 * 
 *  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
// A OPTIMISER POUR QUE ÇA TRIGGUE QUE LORSQUE LA DATE CHANGE
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP TRIGGER IF EXISTS `users_before_update`; 
        CREATE TRIGGER `users_before_update` 
        BEFORE UPDATE ON `users` 
        FOR EACH ROW 
        BEGIN
        IF NOT (NEW.dateDeDerniereConnexion <=> OLD.dateDeDerniereConnexion)  THEN 
        INSERT INTO bddPortail.historique_connexions(fk_id_user, date_de_connexion) 
        VALUES(OLD.login, OLD.dateDeDerniereConnexion); 
        END IF; 
        END;";
    $conn->exec($sql);
    echo "Trigger d'historisation des dates de connexion des users créé<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
