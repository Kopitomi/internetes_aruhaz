<?php
include "dbconnection.php";

session_start ();
$connection = DBconnection::getInstance();
$statement = $connection->select(array("Jelszo"), array("Felhnev"), "Felhnev='".$_POST["uname"]."' AND Jelszo='".hash("MD5", $_POST["psw"])."'");
$result = oci_execute($statement);
$returned_rows = 0;
$nev="";
$row=array();

while($row = oci_fetch_array($statement, OCI_ASSOC)){
    $returned_rows++;
    $nev=$row["NEV"];
}
if($returned_rows!=1){
    echo "Sikertelen bejelentkez�s";

    elseif{
    echo "�dv�zl�m ".$nev.", hamarosan �tir�ny�tom a f�oldalra";
    session_start();
    $_SESSION["fnev"]=$nev;
    $statement = $connection->parseQuery("SELECT Felhanev FROM Rgazda WHERE Felhanev='".$nev."'");
    $result = oci_execute($statement);
    $count=0;
    while(oci_fetch_array($statement, OCI_ASSOC)){
        $count++;
        echo "ADMIN!";
    }
    if($count==1){
  $_SESSION["admin"]=true;
    }
    else{
    echo "�dv�zl�m ".$nev.", hamarosan �tir�ny�tom a f�oldalra";
    session_start();
    $_SESSION["fnev"]=$nev;
    $statement = $connection->parseQuery("SELECT felhasznnev FROM Elado WHERE felhasznev='".$nev."'");
    $result = oci_execute($statement);
    $count=0;
    while(oci_fetch_array($statement, OCI_ASSOC)){
        $count++;
        echo "Elado!";
    }
    if($count==1){
  $_SESSION["elado"]=true;
    }
die();

?>