<?php

session_start();
$error = false;
$auth = new Auth($pdo);


if($auth->user() !== null){
  header('location: /mvc?action=acceuil&login=1');
  exit();
}


if(!empty($_POST)){
  $user= $auth->login($_POST['numero'], $_POST['password']);
  if($user || $user['user_id'] != null){
    header('location: /mvc?action=acceuil&login=1');
    exit();
  }  
  $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content/style.css">
</head>
<body>
<?php require_once('views/styles/commencerstyle.php');?>
<div class="commContainer">
  <div class="commleft">
    <div class="comlcontainte">
    <h1>facebook</h1>
     <p>Avec Facebook,partager et rester en contact avec votre entourage.</p>
    </div>
    <?php if($error):?>
      <p>error</p>
    <?php endif; ?>
  </div>
  <div class="commrigth flex">
    <div class="comrigthcontent">
        <div class="formularcontainer">

          <div class="realformulaire">
            <form action="" method="post">
                <input type="numerique" name="numero" placeholder="numéro de télephone" required>
                <input type="password" name="password" placeholder="mot de passe" required>
                <button>Se connecter</button>
            </form>
            
          </div>


          <div class="mdpobl_nvcount">
            <div class="mdpo">
               <a href="#">mot de passe oublié</a>
            </div>
            <div class="creernvc flex">
              <a href="#">Créer nouveau compte</a>
            </div>
          </div>
        </div>
        <div class="sousformulaire">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, deleniti!</p>
        </div>
    </div>
  </div>
</div>   
</body>
</html>