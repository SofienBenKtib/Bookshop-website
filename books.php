<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books list</title>
    <link rel="stylesheet" href="bookstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<body>
<header>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<a class="navbar-brand" href="./index.php">Book Shop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./books.php">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./login.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div style="margin-top:70px"><h2>Books list</h2></div>
    <?php
	include("connexion.php");
	//appel de la fonction de connexion
	$bdd=maConnexion(); 
	//execution de la requête de sélection
	$reponse=$bdd->query('SELECT * FROM book') or die($bdd->errorInfo()[2]);
	//affichage
	?>
	
	<div class="d-flex p-2 justify-content-between">
	<h3 >Books number :  <?php echo  $reponse->rowCount() ?> </h3>
	<div class="d-flex justify-content-end ">

<a href="./addBook.html">
<button class="btn btn-info">
	<div class="d-flex justify-content-between">
	<span class="material-symbols-outlined mr-5">
				add_circle
			</span>
		Add a new book
	</div>
	</button>
</a>
	</div>
</div>
	<?php 
	$ligne=$reponse->fetchObject();
	?>
	<table>
		<?php 
		foreach ($ligne as $numcol => $val)
			echo "<th> $numcol </th>";
			echo "<tr>";
			do{
				?>
				<tr>
					<td> <?=$ligne->id; ?></td>
					<td> <?=$ligne->Name; ?></td>
					<td> <?=$ligne->Author; ?></td>
					<td> <?=$ligne->Price; ?></td>
					<td> <?=$ligne->Availability; ?></td>
			    </tr>
				<?php
			}while($ligne = $reponse->fetchObject());
			?>
	</table>
	<?php
	$reponse->closeCursor();
	//fermer la connexion
	$bdd=null;
		
		?>
</body>
</html>