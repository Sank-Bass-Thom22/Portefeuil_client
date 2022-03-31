<?php

session_start() ;



function Signature()
{
    if(isset($_SESSION['signature']))
    {
        $mot = $_SESSION['signature'];
        if($mot == "$2y$10$aXOmWvSp1Yv2FqqTHyE52.gocX1mbwFsRiQ.R.kkEirmB/EY7HDnC")
        {
            return true ;
        } else {
            return false ;
        }
    } else {
        return false ;
    }
}