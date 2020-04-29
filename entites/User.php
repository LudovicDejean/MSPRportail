<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Bruno
 */
class User {

    private $login;
    private $password;
    private $email;
    private $infosNavigateur;
    private $ipUser;
    private $fk_id_clinique;
    private $nombreDeTentatives;
    private $estAutorise;
    private $dateDeDerniereConnexion;

    function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getInfosNavigateur() {
        return $this->infosNavigateur;
    }

    function getIpUser() {
        return $this->ipUser;
    }

    function getFk_id_clinique() {
        return $this->fk_id_clinique;
    }

    function getNombreDeTentatives() {
        return $this->nombreDeTentatives;
    }

    function getEstAutorise() {
        return $this->estAutorise;
    }

    function getDateDeDerniereConnexion() {
        return $this->dateDeDerniereConnexion;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setInfosNavigateur($infosNavigateur) {
        $this->infosNavigateur = $infosNavigateur;
    }

    function setIpUser($ipUser) {
        $this->ipUser = $ipUser;
    }

    function setFk_id_clinique($fk_id_clinique) {
        $this->fk_id_clinique = $fk_id_clinique;
    }

    function setNombreDeTentatives($nombreDeTentatives) {
        $this->nombreDeTentatives = $nombreDeTentatives;
    }

    function setEstAutorise($estAutorise) {
        $this->estAutorise = $estAutorise;
    }

    function setDateDeDerniereConnexion($dateDeDerniereConnexion) {
        $this->dateDeDerniereConnexion = $dateDeDerniereConnexion;
    }

}
