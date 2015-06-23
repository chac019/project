<?php
	class dbConnect
	{
		/*
		 * Connexion PDO.
		 */
		private $_connect = null;
		
		/*
		 * Mot de passe de la base SQL.
		 */
		private $_pass = "";
		
		/*
		 * Utilisateur de la base SQL.
		 */
		private $_user = "root";
		
		/*
		 * Type de base utilisée.
		 */
		private $_type = "mysql";
		
		/*
		 * Chemin de la base de données.
		 */
		private $_path = "127.0.0.1";
		
		/*
		 * Nom de ma base de données.
		 */
		private $_dbName = "base";
		
		/*
		 * Constructeur
		 */
		function __construct()
		{
			$this->_connect = new PDO($this->_type . ":host=" . $this->_path.";dbname=".$this->_dbName ,$this->_user, $this->_pass);
		}
		
		/* 
		 * Get my articles from database 'articles'.
		 */
		function GetMyArticles(){
			$result = $this->_connect->query("Select * FROM `article`");

			return $result->fetchAll();
		}
		
		/*
		 * Get my users from database 'users'.
		 */
		function GetMyUsers($name){
            $request = $this->_connect->query("Select * FROM `user` WHERE name = \"".$name."\"");

            $result = $request->fetch();

            if ($result['name'] == $name and $name != 'Dajed') {
                return true;
            }
		}

        /*
         * ici on vérifie dans la table 'user' et dans la colonne 'password' si le $pass correspond à un password existant.
         * Si OUI on retourne un TRUE
         */
        function GetMyPassword($pass){

            $request = $this->_connect->query("Select * FROM `user` WHERE password = \"".$pass."\"");

            $result = $request->fetch();

            if ($result['password'] == $pass and $pass != 'motdepasse') {
                return true;
            }


        }

        function InsertTableUser($name, $mail, $password)
        {

            //echo $name, $mail, $password;

            $sql = "INSERT INTO user ( id, name, mail, password)
                                    VALUES (:id, :name , :mail , :pass )";
            $req = $this->_connect->prepare($sql);

            $req->execute(array(
            'id'=> null,
            'name'=> $name,
            'mail'=> $mail,
            'pass'=> $password,

            ));



            if ($req){
            return true;
            }else{
            return false;
            }
        }


	}