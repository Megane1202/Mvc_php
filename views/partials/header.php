<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<!-- """""""""""""""""""""""""""""""""" -->
<?php  
$auth = new Auth($pdo);
$user = $auth->user();
?>
<header>
   <div class="hleft flex">
      <div class="fblogo">
        <img src="img/facebook (1).png" alt="">       
      </div>
      <div class="fbsearch">
        <input type="text" placeholder="Rechercher sur Facebook">
      </div>
   </div>
   <div class="hsection flex">
       <div class="boxnav active flex">
         <a href="/mvc?action=acceuil&login=1">
         <i class="fa-solid fa-house"></i>
         </a>
       </div>
       <div class="boxnav flex">
         <a href="/mvc?action=videos&login=1">
         <i class="fa-sharp fa-solid fa-play"></i>
         </a>
       </div>
       <div class="boxnav flex">
         <a href="/mvc?action=people&login=1">
         <i class="fa-solid fa-people-group"></i>
         </a>
       </div>
       <div class="boxnav flex">
         <a href="/mvc?action=jeux&login=1"> 
         <i class="fa-solid fa-gamepad"></i>
         </a>
       </div>
   </div>
   <div class="hrigth">
      <div class="boxrigthnav flex">
      <i class="fa-sharp fa-solid fa-comment"></i>
      </div>
      <div class="boxrigthnav flex ">
      <i class="fa-solid fa-bell" id="notif"></i>
      </div>
      <div class="boxrigthnav ">
      <img src="img/images (1).jpeg" class="logoutbtnn">       
        
      </div>

      <div class="logoutetautres">
        <div class="moilogoutimg">
          <div class="logoutmoiimname">
            <img src="img/images (1).jpeg" alt=""> 
            <h1><?php echo $user['nom'];?></h1>      
          </div>
          <a href="/mvc?action=profile" class="linktoprofile">Voir tous les profiles</a>
        </div>
        <div class="logoutimgfake">
           <img src="img/logout.jpg" alt="">       
        </div>
        <div class="logoutrealcontainer">
          <a href="/mvc?action=logout">
          <img src="img/logoutreal.jpg" alt="">       
          </a>
        </div>
        <img src="img/decoration1.jpg" class="decoration1">         
      </div>

      <div class="notifictioncontainer">

      
      </div>
   </div>
</header>
