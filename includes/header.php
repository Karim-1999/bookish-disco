<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS </title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    --> <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>  


.navbar-nav{
  position: absolute;
  right: 60px;
  z-index: 3;
 
  
}

.navbar-brand{
  margin: 11px;
}

.nav-item a{
  border-radius: 10%;
  transition: 0.7s;
   color: inherit !important;
}
.nav-item a:hover{
  background-color: rgba(242, 14, 14, 0.5);
  color: white !important;
  animation: forwards;

}

/* media query mobile */

@media (max-width: 991px) {
  .navbar-nav{
    float: none;
    position: relative;
    right: 0;
    z-index: 3;
    
  }
  .navbar-brand{
    margin: 20px;
  }
}
@media (max-width: 491px) {
  #margin{
    margin: 0 10px !important;; 
  }
  
}


</style>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid" id="margin" style="margin: 0 60px">
    <a class="navbar-brand d-flex justify-content-between" href="#">
      <img src="images/logo-rosso.png" width="100px" alt="Logo">
      <span>  </span> <!-- Aggiunge uno spazio vuoto tra l'immagine del logo e le altre voci di menu -->
    </a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "  href="/cms">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="dashboard.php">Dashboard</a>
        </li>
        <?php
 include('includes/config.php');
  if(isset($_SESSION['username'])) {
    // l'utente è già loggato, mostra il link "logout"
     echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
  } else {
    // l'utente non è loggato, mostra il link "login"
   echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
  }
?>
      </ul>
    </div>
  </div>
</nav>


<!-- 
<button id="dark-mode-toggle">Modalità scura</button> -->

    