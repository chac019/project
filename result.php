<?php
include ("class/dbConnect.php");
$myCo = new dbConnect();
?>

<!Doctype html>
<html>
	<head>
		<title>website</title>
		<!-- metas -->
		<meta charset="UTF-8" />
		<!-- styles -->
		<link rel="stylesheet" href="Css/index.css" />
		<!-- scripts -->
		<script src="Js/index.js" >
		</script>
	</head>
<body>


    <?php

    /*
    *ici on va inserer les données du formulaire dans la table 'user' lors de l'inscription graçe à la récupération des valeurs
     * $_GET['name'], $_GET['mail'], $_GET['password']
    */

        if ($myCo->InsertTableUser($_GET['name'], $_GET['mail'], $_GET['password']))
       {
            echo ("Inscription faite dans la base");
        }else{
            echo ("inscription KO !!!");
        }
    ?>
    <!--redirection vers le formulaire d'inscription-->
    <div class="resultat">
        <table>
            <tbody>
                <tr>
                    <td>NOM:</td>
                    <td><?php echo $_GET["name"]; ?></td>
                </tr>

                <tr>
                    <td>MAIL:</td>
                    <td><?php echo $_GET["mail"]; ?></td>
                </tr>

                <tr>
                    <td>PASSWORD:</td>
                    <td><?php echo $_GET["password"]; ?></td>
                </tr>
            </tbody>
		</table>
	</div>
</body>
</html>
					
				
					