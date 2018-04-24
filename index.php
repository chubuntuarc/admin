<?php 
error_reporting(0);
session_start();
//Required classes
require_once 'data/class/User.php';
require_once '../app/data/class/Recipe.php';
require_once '../app/data/class/Site.php';
if(!$_SESSION['auth']){
   header('Location: login.php');
}elseif($_SESSION["username"] != ''){
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
echo '<div class="container" style="margin-top:64px;">
        <div class="row">
          <div class="col s12">
            <div class="chip blue white-text col s12 m2 offset-m2">
              '.Site::getAllVisits().' visitas en total
            </div>
            <div class="chip green white-text col s12 m2">
              '.Site::getMonthVisits().' visitas este mes
            </div>
            <div class="chip cyan white-text col s12 m2">
              '.Site::getYearVisits().' visitas este año
            </div>
            <div class="chip black white-text col s12 m2">
              '.Recipe::getRecipesTotal().' recetas registradas
            </div>
          </div>
        </div>
      </div>';

//Footer
include 'element/footer.php';
?>          