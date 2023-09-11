<?php  
$auth = new Auth($pdo);
$user = $auth->user();
?>
<?php require_once('views/partials/header.php');?>
<!-- """"""""""""""""""""""""""""""""""" -->
<div class="profileUserContainer">
<div class="couverturecontainer">
    <img src="img/s5.jpg">
</div>
<div class="userimgnavcombine">
<div class="userdetsurcovert">
    <div class="userimgcovert">
      <img src="img/s5.jpg">  
      <div class="camera">
      <i class="fa-solid fa-gamepad"></i>
      </div>
    </div>
    <div class="usernamesouscovert">
        <h1><?php echo $user['nom']; ?></h1>
        <h1>(<?php echo $user['surnom']; ?> 🙄🤣😎)</h1>
        <p>1.5k amis</p>
        <div class="amisboul">
            <div class="bouldami"></div>
            <div class="bouldami"></div>
            <div class="bouldami"></div>
        </div>
    </div>
</div>

</div>















</div>
<!-- """""""""""""""""""""""""""""""""" -->
<?php require_once('views/partials/footer.php');?>



