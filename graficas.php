<?php

if(isset($_POST["Ventas"]))$Ventas=$_POST["Ventas"];
if(isset($_POST["Productos"]))$Productos=$_POST["Productos"];

if($Ventas)
{
    header("Location: ventasdelaño.php");
}

if($Productos)
{
    header("Location: productosgrafica.php");
}