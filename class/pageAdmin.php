<?php
    class pageAdmin
    {
        private $_rootPassword = 'motdepasse';
        private $_rootMail = 'dajed.974@lacour.fr';

        function GetPageAdmin ()
        {
            if ($_GET['password']== '$_rootPassword'AND $_GET ['mail'] == '$_rootMail')
            {
                include('admin.php');
            }

        }

        function GetPageUser ()
        {
            if ($_GET['password']!= '$_rootPassword'AND $_GET ['mail'] != '$_rootMail')
            {
                include('user.php');
            }

        }


    }
/**
 * Created by PhpStorm.
 * User: ETUDIANT
 * Date: 22/06/2015
 * Time: 14:19
 */