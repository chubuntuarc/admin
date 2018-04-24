<?php
//Check for session
session_start();
if(isset($_SESSION['auth'])){
   header('Location: index.php');
}

//Required classes
require_once 'data/class/User.php';
  
$msg = '';

//Check login form inputs
if (isset($_POST['login']) && !empty($_POST['email']) 
   && !empty($_POST['password'])) {
  
   $acces = User::checkLogin($_POST['email'],md5($_POST['password']));
  
   if ($acces) {
      $_SESSION['auth'] = $acces;
      $msg = 'You have entered valid use name and password';
      header('Location: index.php');
   }else {
      $msg =  'Wrong username or password' . $acces;
   }
}
?>
<!--Html content-->
<!DOCTYPE html>
  <html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Admin your way - glib</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="../app/css/materialize.min.css">
      <link rel="stylesheet" href="../app/css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/png" href="../favicon.png"/>
      <link href="../favicon.png" rel="apple-touch-icon" />
      <link href="../favicon.png" rel="apple-touch-icon" sizes="152x152" />
      <link href="../favicon.png" rel="apple-touch-icon" sizes="167x167" />
      <link href="../favicon.png" rel="apple-touch-icon" sizes="180x180" />
      <link href="../favicon.png" rel="icon" sizes="192x192" />
      <link href="../favicon.png" rel="icon" sizes="128x128" />
    </head>
    
    <body style="background-color: #fff3e6;">
      <script type='text/javascript' src='../app/js/jquery.min.js'></script>
      <script>
      //paste this code under the head tag or in a separate js file.
        // Wait for window load
        $(window).load(function() {
          // Animate loader off screen
          $(".se-pre-con").fadeOut("slow");;
        });
      </script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../app/js/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="../app/js/materialize.min.js"></script>
      
      <div class="se-pre-con"></div>
<div navbar-fixed>
<nav>
    <div class="nav-wrapper" <?php echo 'style="background-color: #7a7a7a"' ?>>
      <a href="/admin/" class="brand-logo">glib<span style="font-size:10px;" class="hide-on-med-and-down">Admin your way</span></a>
    </div>
    </nav>
   </div>
      
       
        <div class="container">
            <div class="row">
                <div class="col s12 m6 offset-m3">
      <div class="card1 white z-depth-3" style="border-radius:5px;margin-top:30%;">
        <div class="card-content">
          <span class="card-title" style="color: #7a7a7a;">- Iniciar sesión -</span><hr>
          <form action="login.php" method="post">
          <div class="row">
            <div class="input-field col s10 offset-s1">
              <input id="email" name="email" type="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s10 offset-s1">
              <input id="password" name="password" type="password" class="validate" required>
              <label for="password">Contraseña</label>
            </div>
          </div>
          <div>
            <button class="btn waves-effect waves-light col s10 offset-s1" type="submit" name="login" value="login">Acceder
            </button>
          </div>
          </form>
           </br></br>
          <p class="center-align" style="color: #7a7a7a;">Ingresa tu usuario y contraseña.</p>
          <p class="center-align" style="color: #7a7a7a;">* <?php echo $msg; ?> *</p>                  
        </div>
      </div>
    </div>
            </div>
        </div>
      
       </body>
  </html>