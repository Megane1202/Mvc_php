<?php  
$auth = new Auth($pdo);
$user = $auth->user();
?>
<?php require_once('views/partials/header.php');?>
<section>
<?php require_once('views/partials/left.php');?>
<div class="jeux">
<?php
var_dump($_FILES);
?>
<input type="file">
</div>
<?php require_once('views/partials/rigth.php');?>
</section>
<!-- """""""""""""""""""""""""""""""""" -->
<?php require_once('views/partials/footer.php');?>



