<?php
include ('class/dbConnect.php');
$myCo = new dbConnect();
include ('class/login.php');
$myLog = new login();
include ("class/formulaire.php");
$myForm = new formulaire();
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
            if (isset($_GET['password']))
            {

                /*
                 * on va test le $_GET['password'] dans la fonction IsUserPasswordIsValid ET on va test le $_GET['name']
                 * dans la fonction IsUserNameIsValid
                 */
                 if ($myLog->IsUserPasswordIsValid($_GET['password']) and $myLog->IsUserNameIsValid($_GET['name']))
                 {
                    include('user.php');
                 }else{
                     echo("nom et/ou mot de passe non valide");
                     include ('inscription.php');
                 }




            } else {

        ?>
            <div align="center">PLEASE LOGIN</div>
                <div class="login">
                    <form action="index.php" method="get">
                        <table>
                            <tbody>
                            <tr>
                                <td> NAME:</td>
                                <td><input type="text" name="name" placeholder="name"/></td>
                            </tr>
                            <tr>
                                <td> Mot de passe:</td>
                                <td><input type="password" name="password" placeholder="motdepasse"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="connexion"/></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            <?php
            }
        ?>
    </body>
</html>
