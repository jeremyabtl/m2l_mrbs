<?php
$host = "localhost";
$user = "root";
$db = "mrbs";
$password = "root";

$dns = 'mysql:host='.$host.';dbname='.$db.'';
$utilisateur = $user;
$motDePasse = $password;

try{
	$connexion = new PDO( $dns .'; charset = utf8', $utilisateur, $motDePasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	echo "connexion établie !";
}catch (Exception $e){
	die("erreur : ".$e);
}
?>
