<?php

    class login
    {
        private $_co = null;

        function __construct()
        {
            $this->_co = new dbConnect();

        }

        /*
         *ici le $_GET['password'] passer en index.php sera en valeur de $pass ==> $pass = $_GET['password']
         * on fera appel à la fonction GetMyPassword dans la class dbConnect.php pour vérifier si le $pass existe dans la base mySQL
         */
        function IsUserPasswordIsValid($pass)
        {

            $result = $this->_co->GetMyPassword($pass);

            if ($result) {
                return true;
            }
        }

        /*
         *ici le $_GET['name'] passer en index.php sera en valeur de $name ==> $name = $_GET['name']
         * on fera appel à la fonction GetMyUsers dans la class dbConnect.php pour vérifier si le $name existe dans la base mySQL
         */
        function IsUserNameIsValid($name)
        {

            $result = $this->_co->GetMyUsers($name);

            if ($result) {
                return true;
            }

        }



    }
/**
 * Created by PhpStorm.
 * User: ETUDIANT
 * Date: 22/06/2015
 * Time: 15:19
 */