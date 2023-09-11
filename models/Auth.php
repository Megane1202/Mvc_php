<?php


class Auth
{
  private $pdo;
  
  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function user()
  {
    if(session_status() === PHP_SESSION_NONE){
      session_start();
     }
    $id = $_SESSION['user_id'];
    if($id === null){
      return null; 
    }
    $q = $this->pdo->prepare('select * from users where user_id = ?');
    $q->execute([$id]);
    $user = $q->fetch(PDO::FETCH_ASSOC);
    return $user;
  }



  public function login($numero, $password) 
  {
    //par email
    $q = $this->pdo->prepare('select * from users where numero = :numero');
    $q->execute(['numero' => $numero]);
    $user = $q->fetch(PDO::FETCH_ASSOC);
    if($user === false){
        return null;
    }
    //check passw
    if($password == $user['password']){
       if(session_status() === PHP_SESSION_NONE){
        session_start();
       }
      //  echo("Bonjour ");
        $_SESSION['user_id'] = $user['id'];
        return $user;
    }
    return null;


  }
  






}


?>