<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $table = "CREATE TABLE `human` (".
        "        `nom`	TEXT,".
        "        `prenom`	TEXT,".
        "        `age`	INTEGER".
        ");";
        
        $q1 = "INSERT INTO `human`(`nom`,`prenom`,`age`) VALUES ('LEBRETON','Nicolas','28');";
        $q2 = "INSERT INTO `human`(`nom`,`prenom`,`age`) VALUES ('LEPINAY','Emile','28');";
        $q3 = "INSERT INTO `human`(`nom`,`prenom`,`age`) VALUES ('MAILLOT','Caroline','26');";
        
        $conn = new \PDO('sqlite:AaAaA.db');
        $conn->query($table);
        $conn->query($q1);
        $conn->query($q2);
        $conn->query($q3);
        
        return $this->render('MainBundle:Default:index.html.twig');
    }
}
