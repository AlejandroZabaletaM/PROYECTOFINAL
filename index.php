<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();

				var current = $(this).attr('action');

				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}

				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		})
	</script>

	<style>
		.input-group {
			width: 10%;
			margin: 0 auto;
			margin-top: 5px;
		}
		span {
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="input-group">
    <!--<h2> Iniciar Sesión</h2>-->
    <form action="autenticar.php" method="POST">
        <h2><label for="nickname">Usuario</label></h2>
        <h2><input type="text" name="nickname"></p></h2>
        <h2><p><label for="password">Contraseña</label></h2>
		<input class="form-control" type="password" name="password"/>
		<span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>
        <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
    if($error == "vacio"){
        echo "<h2>Los datos enviados se encuentran vacios</h2>";
    }
}
?>

        <h2><input type="submit" value="Acceder"></h2>
    </form>
	</div>
</body>
</html>