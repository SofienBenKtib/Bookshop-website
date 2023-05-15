<?php
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion();

//first name:
if (isset($_REQUEST['firstName']) && !empty($_REQUEST['firstName']))
$firstName=$bdd->quote($_REQUEST['firstName']);

//last name:
if (isset($_REQUEST['lastName']) && !empty($_REQUEST['firstName']))
$lastName=$bdd->quote($_REQUEST['lastName']);

//email:
if (isset($_REQUEST['email']) && !empty($_REQUEST['email']))
$email=$bdd->quote($_REQUEST['email']);


//password
if (isset($_REQUEST['password']) && !empty($_REQUEST['password']))
$password=$bdd->quote($_REQUEST['password']);
$sql="INSERT into user values (NULL,$firstName,$lastName,$email,$password)";
$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
	die("<p>Impossible d'effectuer la requete! ".$bdd->errorInfo()[2]."</p>");
else
{
?><p class='temps'>You've been signed up! <br>
<?php
echo "User Id number is :".$bdd->lastInsertId();
}?>
<p><a href="./index.php">Go to Home page</a></p></p></p>
<?php 
$bdd=null;
?>