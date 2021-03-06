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
  
</style>
<body>
<div class="container">
    <div class="row">

        <div class="col">
            <img src="tecso.png" alt="logo" width="200">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary"><a href="main.php">Vissza a Főoldalra</a></button>
            <button type="button" class="btn btn-secondary"><a href="logout.php">Kijelentkezés</a></button>
        </div>

    </div>

</div>

<?php
   include "dbconn.php";
   $conn = DBconnection::getInstance();

        $stid2 = oci_parse($conn->getConnection(), 'SELECT * FROM kategoria');
if(!$stid2) {
	$e = oci_error($conn->getConnection(), $query);
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$r = oci_execute($stid2);
if(!$r){
	$e = oci_error($stid2);
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>

<div class="container" style="padding-top: 1cm;">
        <h1 class="text-center" style="color: rgb(99, 37, 153); font-family: 'Times New Roman', Times, serif;">Termék felvitele</h1>
        <hr style="margin-top: 0;margin-bottom:2em;width: 50px; text-align: center;height:2px;color:rgb(255, 0, 98);background-color:rgb(255, 0, 98)">

<form method="POST" action="additem.php" accept-charset="utf-8">
    <div class="form-group">
        <label for="itemid">Termékkód</label>
        <input type="text" name="itemid" class="form-control" id="itemid" placeholder="Termékkód">
    </div>
    <div class="form-group">
        <label for="price">Ár</label>
        <input type="number" name="price" class="form-control" id="price" placeholder="Ár">
    </div>
    <div class="form-group">
        <label for="itemname">Név</label>
        <input type="text" name="itemname" class="form-control" id="itemname" placeholder="Név">
    </div>
    <div class="form-group">
        <label for="what">Leírás</label>
        <input type="text" name="what" class="form-control" id="what" placeholder="Leírás">
    </div>
    <div class="form-group">
        <label for="amount">Darabszám</label>
        <input type="number" name="amount" class="form-control" id="amount" placeholder="Darabszám">
    </div>
    <div class="form-group">
        <label for="cat">Kategória</label><br>
        <?php
        echo "<select name='cat'>";
        while($row = oci_fetch_array($stid2)) 
        {
            echo "'<option name='cat' id='cat'> $row[KATEGORIA] </option>'";
        }
        echo "</select>";
        oci_free_statement($stid2);
        ?>
        
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-outline-dark" value="Mentés"></input>
    </div>
</form>
</div>

</body>
</html>