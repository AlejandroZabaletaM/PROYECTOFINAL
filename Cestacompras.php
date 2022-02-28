<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Cesta de Compras</title>
</head>
<body><br>
<div align="center"
    <h3>Vista de los productos agregados a la cesta</h3>

    <a href="total.php"><img src="imgs/cesta.png" width="200px;"></a>
    <hr>

    <table class="table table-dark" style="width: 600px;">
    <thead>
        <th>ID</th>
        <th>PRODUCTO</th>
        <th>DESCRIPCION</th>
        <th>ACCIONES</th>
</thead>
<tbody>
    <tr style="width:600px;">
        <td style="width:100px;">1020</td>

        <td style="width:100px;">
            <img src="imgs/coca.jpg" width="100px" height="100px">
        </td>

        <td style="width: 300px;">
            Descripción:<br> $15 | Este es un producto que puede elevar sus niveles de azucar tomelo con moderación
        </td>

        <td style="widht: 300px;">
        <form action="CestaCompras.php" method="POST">
            <input type="hidden" name="txtProducto" value="Coca Cola">
            <input type="number" name="cant" value="1" style="width:50px;"><br>
            <input type="hidden" name="txtPrecio" value="15">
            <input type="submit" value="Agregar" name="btnAgregar">
        </form>
        </td>
    </tr>

    <tr style="width:600px;">
        <td style="width:100px;">1240</td>

        <td style="width:100px;">
            <img src="imgs/bigc.jpg" width="100px" height="100px">
        </td>

        <td style="width: 300px;">
            Descripción:<br> $10 | Este es un producto que puede elevar sus niveles de azucar tomelo con moderación
        </td>

        <td style="widht: 300px;">
        <form action="CestaCompras.php" method="POST">
            <input type="hidden" name="txtProducto" value="Big Cola">
            <input type="number" name="cant" value="1" style="width:50px;"><br>
            <input type="hidden" name="txtPrecio" value="10">
            <input type="submit" value="Agregar" name="btnAgregar">
        </form>
        </td>
    </tr>

    <tr style="width:600px;">
        <td style="width:100px;">1640</td>

        <td style="width:100px;">
            <img src="imgs/pepsi.jpg" width="100px" height="100px">
        </td>

        <td style="width: 300px;">
            Descripción:<br> $13 | Este es un producto que puede elevar sus niveles de azucar tomelo con moderación
        </td>

        <td style="widht: 300px;">
        <form action="CestaCompras.php" method="POST">
            <input type="hidden" name="txtProducto" value="Pepsi">
            <input type="number" name="cant" value="1" style="width:50px;"><br>
            <input type="hidden" name="txtPrecio" value="13">
            <input type="submit" value="Agregar" name="btnAgregar">
        </form>
        </td>
    </tr>
</table>
<div>
<?php
   if(isset($_REQUEST["btnAgregar"])){
       $producto = $_REQUEST["txtProducto"];
       $cantidad = $_REQUEST["cant"];
       $precio = $_REQUEST["txtPrecio"];

       $_SESSION["cesta"][$producto]["cant"] = $cantidad;
       $_SESSION["cesta"][$producto]["precio"] = $precio;
       
       echo "<script>alert('Producto $producto agregado con exito a la cesta');</script>";
   }

?>
    
</body>
</html>