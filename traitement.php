<?php
//echo"Bonjour à tous";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password = $_POST['password'];
$email = $_POST['email'];
$framework0="";
$framework1="";
$framework2="";

if(isset($_post['framwork'][0])) {$framework0 = $_POST['framework'][0];};
if(isset($_post['framwork'][1])) {$framework1 = $_POST['framework'][1];};
if(isset($_post['framwork'][2])) {$framework2 = $_POST['framework'][2];};
echo"vous avez tapé :".$nom." ".$prenom." ".$password." ".$email." ".$framework0." ".$framework1." ";
?>