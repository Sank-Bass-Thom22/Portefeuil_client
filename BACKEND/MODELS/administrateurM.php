<?php

require_once('../MODELS/database.php') ;

class AdminM extends Connecteur
{
    private $_bdd =$this->Connexion() ;

    public function Sign_in(AdminC $AdminC)
    {
        $sql = "SELECT * FROM `administrateur` WHERE adminname = :adminname AND email = :email AND status = Unlock" ;
        $query = $this->_bdd->prepare($sql) ;

        $query->bindParam(':adminname', htmlspecialchars(strip_tags(trim($AdminC->getAdminname())))) ;
        $query->bindParam(':email', htmlspecialchars(strip_tags(trim($AdminC->getEmail())))) ;
        $query->execute() ;

        $row = $query->fetch() ;
        if(!empty($row))
        {
            if(password_verify($AdminC->getEmail, $row['password']))
            {
                if($row['degree'] == 1)
                {
                    $code = 101 ;
                } else {
                    $code = 102 ;
                }
            } else {
                $code = 201 ;
            }
        } else {
            $code = 200 ;
        }
        return $code ;
    }

    public function All_admin()
    {
        $sql = "SELECT id_admin, adminname, email FROM `administrateur` WHERE 1 ORDER BY id_admin ASC" ;
        $query = $this->_bdd->prepare($sql) ;
        $query->execute() ;
        return $query ;
    }

    public function Single_admin($id_admin)
    {
        $sql = "SELECT * FROM `administrateur` WHERE id_admin = :id_admin" ;
        $query = $this->_bdd->prepare($sql) ;

        $query->bindParam(':id_admin', intval($id_admin)) ;
        $query->execute() ;

        return $query ;
    }

    public function Sign_up(AdminC $AdminC)
    {
        $sql = "SELECT adminname, email FROM `administrateur` WHERE adminname = :adminname AND email = :email ORDER BY adminname ASC" ;
        $query = $this->_bdd->prepare($sql) ;

        $query->bindParam(':adminname', htmlspecialchars(strip_tags(trim($AdminC->getAdminname())))) ;
        $query->bindParam(':email', htmlspecialchars(strip_tags(trim($AdminC->getEmail())))) ;
        $query->execute() ;

        $row = $query->fetch() ;
        if(empty($row))
        {
            $sql = "INSERT INTO `administrateur`(adminname, email, password, degree, status, session) VALUES(:adminname, :email, :password, :degree, :status, :session)" ;
            $query = $this->_bdd->prepare($sql) ;

            $query->bindParam(':adminname', htmlspecialchars(strip_tags(trim($AdminC->getAdminname())))) ;
            $query->bindParam(':email', htmlspecialchars(strip_tags(trim($AdminC->getEmail())))) ;
            $query->bindParam(':password', htmlspecialchars(strip_tags(trim(password_hash($AdminC->getPassword(), PASSWORD_BCRYPT))))) ;
            $query->bindParam(':degree', htmlspecialchars(strip_tags(trim($AdminC->getDegree())))) ;
            $query->bindParam(':status', htmlspecialchars(strip_tags(trim($AdminC->getStatus())))) ;
            $query->bindParam(':session', htmlspecialchars(strip_tags(trim($AdminC->getSession())))) ;
            $query->execute() ;

            if(!empty($query))
            {
                $code = 100 ;
            } else {
                $code = 202 ;
            }
        } else {
            $code = 103 ;
        }
        return $code ;
    }

}