<?php 

session_start();  //Tiene que estar en la primera l�nea
//session_register ("cesta");  // Se declara la variable de sesi�n cesta. Si no se declara, no suele dar fallo

/* Registrar variable de sesi�n

-> SI SE A�ADE A CESTA, SE EJECUTA TODO ESTE C�DIGO

/* Si hay datos en el $_POST (datos de formulario), los guardamos en las variables de sesi�n
    - Recoger campos en variable ($producto y $cantidad)
	- Crear variable de tipo array donde se guarda lo que va comprando el usuario
		$cesta=$_SESSION['cesta']  Lo q tengamos en la variable de sesi�n lo graba en la variable $cesta
	
	// Si no existe $cesta (la primera vez no exite porque $_SESSION est� vac�o
	  // A�adir en la cesta el producto y cantidad   Creamos una referencia dentro del array -> $cesta es un array asociativo
	     $cesta[$_POST['cproducto']]=$_POST['cunidades'] �  $cesta [$producto] = $cantidad
		 
	// y si no (si existe $cesta)
		// Recoger la cesta para localizar si el producto ya ha sido enviado
		// Si existe el producto
			// A�adir la cantidad
		// si no existe
			// Crear el producto en $cesta		 	
	
   // Grabar en variable de sesi�n $cesta
		$_SESSION['cesta']=$cesta  
	
*/

// Si existe $cesta, muestra el formulario, si no.. muestra el contenido de lo comprado

if ($_POST) { // Si tenemos datos de formulario...
	if (isset ($_POST['cproducto'])){
		$producto = $_POST['cproducto'];
	}
	
	if (isset ($_POST['cunidades'])){
		$unidades = $_POST['cunidades'];
	}
	
	$cesta=$_SESSION['cesta'];  // Creamos el array  // La primera vez, se guardar� vac�a

	if (!isset ($cesta)){ // Si no existe la cesta
		$cesta[$producto]=$unidades;	// Grabo el primer producto en la ceta
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin título</title>
</head>

<body>
<form action="carrito_formulario.php" method="post">
<h2> <label for="producto">Producto</label></h2> 
	<select name="cproducto">
		<option value="481">Coca cola</option>
		<option value="550">pesi cola</option>
		<option value="011">big cola</option>
	</select>

	<label for="unidad">Unidades</label><input type="text" name="cunidades" /><br />
    
	<input type="submit" value="A�adir a cesta" />
</form>

<?
?>
</body>
</html>