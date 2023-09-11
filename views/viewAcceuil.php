<?php  
$auth = new Auth($pdo);
$user = $auth->user();




?>
<?php require_once('views/partials/header.php');?>

<section>
<?php require_once('views/partials/left.php');?>

<?php require_once('views/partials/section.php');?>

<?php require_once('views/partials/rigth.php');?>



</section>
<?php 
echo "vous etes connecté en tant que:".$user["nom"];
var_dump($user["nom"]);
var_dump($user["id"]);

?>
<!-- """""""""""""""""""""""""""""""""" -->
<?php require_once('views/partials/footer.php');?>



