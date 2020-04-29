<?php

declare(strict_types = 1);
require('../vendor/autoload.php');

class Database {

    static private $servername;
//static private $PARAM_port = '3306';
    static private $dbname;
    static private $username;
    static private $password;
    static protected $maConnexion = null;

    protected function __construct() {
        $servername = $_ENV['DB_HOST'];
//  $PARAM_port = '3306';
        $dbname = $_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        try {
            Database::$maConnexion = new PDO("mysql:host="
                    . Database::$servername
                    . "; dbname="
                    . Database::$dbname, Database::$username, Database::$PARAM_mot_passe);
            Database::$maConnexion->query("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
            die("IMPOSSIBLE DE CREER UN PDO !");
        }
    }

//destructeur pour clore la liaison avec la bdd
    public function __destruct() {
        Database::$maConnexion = null;
    }

    /**
     *  On crée un objet $maConnexion qui est un PDO instancié dans la classe statique Database.
     * Il s'agit d'un 'Singleton'. On ne peut pas instancier d'autre instance
     */
    public static function creerMaConnexionBdd() {
        if (Database::$maConnexion == null) {
            try {
                Database::$maConnexion = new Database();
            } catch (Exception $ex) {
                die("Mais !.... Comme qui dirait, on n'arrive pas à se connecter à la bse de données !!!");
            }
        }
        return Database::$maConnexion;
    }

}
