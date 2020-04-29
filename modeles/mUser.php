<?php

/**
 * Doit extends database pour la connexion !
 *
 * @author Bruno
 */
class mUser extends Database {

    function __construct() {
        parent::__construct();
    }

    public function verifierMotDePasse($log, $mdp) {
        try {
            $userLoggued = PdoNesti::readUserFromConnectPhp($log, $mdp);
        } catch (Exception $ex) {
            
        }
        if (isset($userLoggued[0]['user_droits'])) {
            if ($userLoggued[0]['user_droits'] == 2 || $userLoggued[0]['user_droits'] == 1) {
                $_SESSION['isConnected'] = True;
                $_SESSION['userLoggued'] = $userLoggued;
            } else {
                $connectionOk = False;
            }
        }
        // var_dump($_SESSION['userLoggued'][0]['mail_user']);
        //die('coucou');
        return $_SESSION;
    }

}
