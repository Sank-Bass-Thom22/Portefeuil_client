<?php

class Connecteur
{
    private $_host = "localhost";
    private $_dbname = "mybank";
    private $_user = "root";
    private $_password = "root";
    
    protected function Connexion()
    {
        try
        {
            $bdd = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_dbname . ';Charset=UTF-8', $this->_user, $this->_password);
            return $bdd;
        }
        catch(PDOException $e)
        {
            die("ERREUR DE CONNEXION <br />" . $e->getMessage());
        }
    }
    
}