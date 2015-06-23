<!Doctype html>
<html>
<head>
    <title>Page User</title>
    <!-- metas -->
    <meta charset="UTF-8" />
    <!-- styles -->
    <link rel="stylesheet" href="Css/index.css" />
    <!-- scripts -->
    <script src="Js/index.js" >
    </script>
</head>
<body>
    <div>
        <div>Bienvenue dans votre espace personnel</div>
        <?php
            echo $_GET['name'];
        ?>
    </div>
</body>
</html>




