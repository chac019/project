<?php
/**
 * Created by PhpStorm.
 * User: ETUDIANT
 * Date: 23/06/2015
 * Time: 11:20
 */

class formulaire {

    private $_conn = null;

    function __construct()
    {
        $this->_conn = new dbConnect();

    }

    function NewInscription ($name, $mail, $password)
    {
        $result = $this->_conn->InsertTableUser($name, $mail, $password);

        if ($result){
            return true;
        }
    }

}