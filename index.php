<?php 
session_start();
//Required classes
require_once 'data/class/User.php';
if(!$_SESSION['auth']){
   header('Location: login.php');
}elseif($_SESSION["username"]){
  echo 'ok';
}else{
  $user = User::searchById($_SESSION["auth"]);
  $_SESSION["username"] = $user->getUsername();
  $_SESSION["first_name"] = $user->getFirstName();
  $_SESSION["second_name"] = $user->getSecondName();
  $_SESSION["email"] = $user->getEmail();
  $_SESSION["profile"] = $user->getProfile();
}
//App global vars
include '../app/data/vars.php'; 

//Html head
include '../app/element/head.php'; 

//CSS
echo '<link rel="stylesheet" href="../app/css/cards.css">';

//Navbar
include_once 'element/navbar.php';

//Side bar
include_once 'element/sidebar.php';

//Html tags
echo '<h1>Hola admin</h1>';

//Footer
include 'element/footer.php';
?>          