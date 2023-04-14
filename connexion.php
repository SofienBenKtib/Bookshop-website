<?php 
function maConnexion(){
    try {
        $bdd=new PDO('mysql:host=localhost;dbname=bookshop','root','root');
        return $bdd;
    } catch (PDOException $e) {
        die('Erreur : ' .$e->getMessage());
    }
}
?>