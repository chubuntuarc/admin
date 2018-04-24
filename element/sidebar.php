<link rel="stylesheet" href="../app/css/sidebar.css">
<ul id="slide-out" class="side-nav">
    <li><div class="user-view" <?php echo 'style="background-color: '.$second_color.'"' ?>>
      <a href="#!user"><img class="circle responsive-img" src="images/profile/<?php echo $_SESSION["profile"];?>"></a>
      <a href="#!name"><span class="white-text name"><?php echo $_SESSION["first_name"] . ' ' . $_SESSION["second_name"];?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $_SESSION["email"];?></span></a>
    </div></li>
    <li><a href="list.php"><i class="material-icons">shopping_cart</i>Lista de compras</a></li>
  <li><a href="inventory.php"><i class="material-icons">description</i>Inventario</a></li>
    <li><a href="likes.php"><i class="material-icons">grade</i>Mis gustos</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="/" >Mi cuenta</a></li>
    <li><a class="waves-effect" href="logout.php" >Salir</a></li>
    <li><a class="subheader">JesusArc 2018</a></li>
  </ul>
       