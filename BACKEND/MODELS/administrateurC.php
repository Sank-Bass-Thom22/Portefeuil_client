<?php

class AdminC {
    private $_adminname ; private $_email ; private $_password ;
    private $_degree ; private $_status ; private $_session ;
    private $_erreur ; private $_paternname = "#([^a-zA-Z0-9\s])#" ;
    private $_paternemail ="#([^a-z0-9@.\s])#" ; private $_paternpassword = "#([^a-zA-Z0-9@_$%*\s])#" ;


    public function __CONSTRUCT(array $Donnees)
    {
        $this->hydrateAdmin($Donnees) ;
        return ;
    }

    private function hydrateAdmin($Donnees)
    {
        foreach ($Donnees as $key => $value)
        {
            $methode = "set" . ucfirst(strtolower($key)) ;
            if(method_exists($this, $methode))
            {
                $this->$methode($value) ;
            }
        }
        return ;
    }

    private function setAdminname($adminname)
    {
        if(empty($this->_erreur))
        {
            preg_match($this->_paternname, $adminname, $result) ;
            if(empty($result) && strlen($adminname) > 2)
            {
                $this->_adminname = ucfirst(strtolower($adminname)) ;
            } else {
                $this->_erreur = "ERREUR : Le nom d'utilisateur doit commencer par une lettre alphabétique, et peut contenir des chiffres.<br />Il doit avoir une taille minimale de 3 caractères." ;
            }
        }
        return ;
    }

    private function setEmail($email)
    {
        if(empty($this->_erreur))
        {
            preg_match($this->_paternemail, $email, $result) ;
            if(empty($result) && strlen($email) > 10)
            {
                $this->_email = strtolower($email) ;
            } else {
                $this->_erreur = "ERREUR : L'adresse mail renseignée n'est pas valide." ;
            }
        }
        return ;
    }

    private function setDegree()
    {
        if(empty($this->_erreur))
        {
            $this->_degree = 2 ;
        }
        return ;
    }

    private function setSession()
    {
        if(empty($this->_erreur))
        {
            $this->_session = "OffLine" ;
        }
        return ;
    }

    private function setStatus()
    {
        if(empty($this->_erreur))
        {
            $this->_status = "Unlock" ;
        }
        return ;
    }

    public function getAdminname()
    {
        return $this->_adminname ;
    }

    public function getEmail()
    {
        return $this->_email ;
    }

    public function getPassword()
    {
        return $this->_password ;
    }

    public function getDegree()
    {
        return $this->_degree ;
    }

    public function getSession()
    {
        return $this->_session ;
    }

    public function getStatus()
    {
        return $this->_status ;
    }

    public function getErreur(
        {
            return $this->_erreur ;
        }
    )
}