<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  

    if (isset($_REQUEST['action'])) {
      require "model.php";
      require "control.php";
      $pieces = new Pieces();

     

      if ($_GET['action'] == 'add') {
        $pieces->setAdd($_POST);
       header('Location: view.php');
       session_start();
      }
      if ($_GET['action'] == 'Rechercher') {
        $recherche=$recherche->Search($_POST);
        include "view.php";
    
      }

      
      if ($_GET['action'] == 'lire') {
        $pieces->getlire();
      } 
  }
?>
