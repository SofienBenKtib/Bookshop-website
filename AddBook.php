<?php 
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion();

//name:
if (isset($_REQUEST['bookName']) && !empty($_REQUEST['bookName']))
$bookName=$bdd->quote($_REQUEST['bookName']);

//author:
if (isset($_REQUEST['author']) && !empty($_REQUEST['author']))
$author=$bdd->quote($_REQUEST['author']);

//price:
if (isset($_REQUEST['price']) && !empty($_REQUEST['price']))
$price=$bdd->quote($_REQUEST['price']);

//price:
if (isset($_REQUEST['availability']) && !empty($_REQUEST['availability']))
$availability=$bdd->quote($_REQUEST['availability']);

$sql="INSERT into book values (NULL,$bookName,$author,$price,$availability)";
$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
	die("<p>Impossible d'effectuer la requete! ".$bdd->errorInfo()[2]."</p>");
else
{
?><p class='temps'>Book has been added ! <br>
<?php
echo "Book Id number is :".$bdd->lastInsertId();
}?>
<p><a href="./books.php">Go to Books page</a></p></p>
<?php 
$bdd=null;

?>