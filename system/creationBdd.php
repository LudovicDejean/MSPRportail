<?php

require '../../vendor/autoload.php';

use Dotenv\Dotenv;
use system\DatabaseConnector;
use system\PDODbImporter;

// AFFICHAGE DES ERREURS POUR LE DEV: 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dotenv = new DotEnv(dirname(__DIR__));
var_dump($dotenv);
$dotenv->load();

//putenv('DB_DATABASE=bddPortail');


$database = (new DatabaseConnector)->getConnection();

/**
 * Import SQL files to generate DB
 */
$importeur = new PDODbImporter;
$pathSQL = './scriptCreationBdd.sql';
$importeur->importSQL($pathSQL, $database);
echo("COOL !");
phpinfo();
