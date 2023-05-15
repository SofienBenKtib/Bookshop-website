<?php 
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion();

//email:
if (isset($_REQUEST['email']) && !empty($_REQUEST['email']))
$email=$bdd->quote($_REQUEST['email']);

//password:
if (isset($_REQUEST['password']) && !empty($_REQUEST['password']))
$password=$bdd->quote($_REQUEST['password']);


$sql="select * from user where user.email=$email and
user.password=$password";
$resultat=$bdd->query($sql) or die ("Problème de recherche".$bdd->errorInfo()[2]);

//if email and/or password don't exist
if ($resultat->rowCount()==0){
echo ("<p>Utilisateur non existant</p>");}
else {
    //if the credentials are correct, the user will be redirected to the home page
header("location : index.php");
}

?>