<?php

require_once('./../../Connexion/core/Database/connection.php');
$conn = (new Database())->getConnection();

   if(isset($_GET['id'])){
    
   if(isset($_POST['send'])){
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['mail']);
    $photo = htmlspecialchars($_POST['photo']);

    if(!empty($nom) and !empty($email)){
        $id = $_GET['id'];
      $q = $conn->prepare("UPDATE utilisateurs SET NOM=?, EMAIL=?, PHOTO=?  WHERE ID = ?");
      $q->execute(array($nom,$email,$photo,$id));

    }
  }
 }
  header("location: ./../table.php");
?>