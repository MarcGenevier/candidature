<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
		
		<legend><strong>Votre candidature</strong></legend>
		
		<table>
			<tr>
				<td>Votre identité :</td>
				
					<td> <?php echo $_GET["civilité"]. " "; ?> </td>
			</tr>
				
			<tr>
					<td>Votre nom:</td>
					<td> <?php echo $_GET["Nom"]. " "; ?> </td>
			</tr>
				
			<tr>
					<td>Votre prénom:</td>
					<td> <?php echo $_GET["Prénom"] ; ?> </td>
			</tr>
		
		
			<tr>
				<td>Date de naissance :</td>
				<td><?php
					echo $_GET["DateNaissance"]; ?>
				</td>
			</tr>
		
			<tr>
				<td>Votre numéro de téléphone :</td>
				<td><?php echo $_GET["NumTel"]; ?></td>
			</tr>
		
			<tr>
				<td>Votre adresse email :</td>
				<td> <?php echo $_GET["email"]; ?> </td>
			</tr>
		
			<tr>
				<td>Votre niveau en PHP :</td>
				<td> <?php echo $_GET["niveau"]; ?> </td>
			</tr>
		
			<tr>
				<td>Framework(s) pratiqué(s) :	</td>
				<td> <?php	
					foreach( $_GET["Frameworks"] as $framework ){ 
					echo $framework ."<br/> ";
					} ?> 
				</td>
			</tr>
		
			<tr>
				<td>Elément(s) suplémentaire rajouté(s) :</td>
				<td><?php 
					echo $_GET["zonetxt"];
					?>
				</td>
			</tr>
		</table>
		
	</body>

</html>	

