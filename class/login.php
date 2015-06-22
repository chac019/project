<?php

    class login
    {
        private $_co = null;

        function __construct()
        {
            $this->_co = new dbConnect();
        }

        function GetUserPassword()
        {

            $result = $this->_co->query("Select * FROM `password`");

            if ($result['password'] == $_GET['password'] and $_GET['password'] != 'motdepasse') {
                include('user.php');
            } else {
                echo 'WRONG PASSWORD !!!';
            }

        function GetUserName()
            {

                $result = $this->_co->query("Select * FROM `name`");

                if ($result['name'] == $_GET['name'] and $_GET['name'] != 'Dajed') {
                    include('user.php');
                } else {
                    echo 'WRONG NAME !!!';
                }
            }
        }
    }
/**
 * Created by PhpStorm.
 * User: ETUDIANT
 * Date: 22/06/2015
 * Time: 15:19
 */