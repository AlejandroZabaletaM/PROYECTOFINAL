<?php
session_start();
session_destroy();

$total=0;

if(isset($_SESSION["cesta"])){
    foreach($_SESSION["cesta"] as $indice => $arreglo){
        echo "<hr>Producto: <strong>". $indice . "<strong><br>";
        $total += $arreglo["cant"] * $arreglo["precio"]; 
        foreach($arreglo as $key =>$value){
            echo $key .": " . $value . "<br>";
        }
        echo"<a href='total.php?producto=$indice'>Eliminar Item</a>";
    }
    echo "<h3>El total de la compra actual es de $ $total </h3>";
    echo '<br><br><a href=""<CestaCompras.php>Regresar</a> |
    <a href="CestaCompras.php?vaciar=true">Vaciar cesta</a>';
}else{
    echo"<script>alert('La cesta esta vacía');</script>";
    
    echo "<a href='Cestacompras.php'>Regresar a la pagina principal</a>";
    ?>
    <?php
}

if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("Location:total.php");
}
if(isset($_REQUEST["item"])){
    $producto=$_REQUEST["item"];
    //$_SESSION["cesta"][$producto]["cant"] = $cantidad;
    unset($_SESSION["cesta"][$producto]);

    echo "<script>alert('Se elimino el producto: $producto');</script>";
    header("Location:total.php");
}
if(isset($_REQUEST["agregar"])){

    $producto=$_REQUEST["nombre"];
    $cantidad=$_REQUEST["cantidad"];
    $precio=$_REQUEST["precio"];
    $total_c=0;
    if(isset($_SESSION["cesta"])){
        foreach($_SESSION["cesta"] as $indice =>$arrreglo){
            if($producto==$indice){
                $total_c=intval($arrreglo["cantidad"]);
            }
        }
    }
    $_SESSION["carrito"][$producto]["cantidad"]=$total_c+$cantidad;
    $_SESSION["carrito"][$producto]["precio"]=$precio;

    echo "<script>alert('Producto $producto agregado al carrito');</script>";
}/*
La función intval() convierte String a int si tu ya lo tienes en int no es necesario hacerlo te bastaría con poner $total_c=$arreglo["cantidad"]; 
*/

?>





?>