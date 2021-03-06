<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tecso</title>
    <link rel="icon" href="icon.png" sizes="57x57" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style>
 a, a:hover{
     color: black;
     text-decoration: none;
 }
 .column {
  float: left;
  width: 33.3%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
  
</style>
<body>
<div class="container">
    <div class="row">

        <div class="col">
            <img src="tecso.png" alt="logo" width="200">
        </div>
        <form>
            <button type="button" class="btn btn-info"><a href="main.php">Főoldal</a></button>
            <button type="button" class="btn btn-info"><a href="logout.php">Kijelentkezés</a></button>
        </form>
    </div>
</div>
<div class="container" id="linkek">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="main.php">Termékek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comment.php">Comment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kapcs.html">Kapcsolat</a>
        </li>
        <?php
        session_start();
            if(isset($_SESSION['Felhanev'])){
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='eladoreg.html'>Eladó Létrehozás</a>";
            echo "</li>";
            }
            if(isset($_SESSION['Felhnev'])){
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='profil.php'>Profil</a>";
                echo "</li>";
                }
            if(isset($_SESSION['Felhasznev'])){
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='add.php'>Termék macera</a>";
                echo "</li>";
                }
        ?> 
    </ul>
</div>
<div class="container">
    <div class="row" style="align-items: center;">
        <div class="col">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="tomi.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Kopanecz Tamás aka(spagetti coder)</h4>
                <p class="card-text">Email</p>
                <p class="card-text">Kokány Bt. expert.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="fanni.png" alt="Card image" >
                <div class="card-body">
                <h4 class="card-title">Bohus Fanni</h4>
                <p class="card-text">bohusfanni@gmail.com</p>
                <p class="card-text">PTI-s Nő</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="keve.png" alt="Card image" >
                <div class="card-body">
                <h4 class="card-title">Kalotay Keve</h4>
                <p class="card-text">Email</p>
                <p class="card-text">Részmunkaidős alkoholista</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>