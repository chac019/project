<html>
    <div>
        Welcome Administrator


                    <?php
                    //conexion a la base et consultaion des reponses dans un tableau
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "mybase";
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                    $sql = 'SELECT * FROM user ORDER BY id DESC';

                    $response = $conn->query($sql);

                    $result = $response->fetchAll();

                    if ($result){
                        //var_dump($result);
                        ?>


                        <table>
                            <thead>
                                <tr>
                                    <td>Nom</td>
                                    <td>Prenom</td>
                                </tr>
                            </thead>
                            <tbody>

                        <?php
                        foreach( $result as $user)
                        {
                            ?>
                                <tr>
                                    <td><?php echo $user['Firstname']; ?></td>
                                    <td><?php echo $us er['Name']; ?></td>
                                </tr>
                            <?php
                        }
                        ?>
                                </tbody>
                        </table>


                    <?php
                    }

                            ?>


    </div>
</html>