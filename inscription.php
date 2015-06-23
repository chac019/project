<!Doctype html>
<html>
	<head>
		<title>TP</title>
		<!-- metas -->
		<meta charset="UTF-8" />
		<!-- styles -->
		<link rel="stylesheet" href="Css/index.css" />
		<!-- scripts -->
		<script src="Js/index.js" >
		</script>
	</head>
	<body>
		<div class="myclass">

		<form action="result.php" method="get">
			<table>
			<tbody>
				<tr>
					<td> Nom:</td>
					<td> <input type="text" name="name" placeholder="nom" /></td>
				</tr>

				<tr>
					<td> Mail:</td>
					<td> <input type="mail" name="mail" placeholder="mail" /></td>
				</tr>

                <tr>
                    <td> Mot de passe:</td>
                    <td> <input type="password" name="password" placeholder="motdepasse" /></td>
                </tr>
				<tr>
				<td> <input type="submit" value="Envoyer" /> </td>
				</tr>
			</tbody>	
			</table>
			</form>
				
		</div>
	</body>
</html>
		