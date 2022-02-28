<?php
//Aquí declaro la variable error para que verifique si los datos que introducen son correctos.
$error;
//Determino si mis variables de usuario y contraseña no vienen vacios
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    //Verifico la primer contraseña, aquí se determina si la contraseña para el administrador es correcta
    if($nickname == 'administrador' && $password == "nimda"){
        //Si la contraseña es correcta mi variable error se iguala a "ok"
        $error = "OK";
        //Si ingresa a este if el usuario es mandado a la página del dashboard
        header("Location: dashboard.php");
        //Si la contraseña no es la de administrador, determina si la contraseña es la del cliente
    }elseif($nickname == 'cliente' && $password == "tneilc"){
        //Si la contraseña es la del cliente y entra al if la variable error se iguala a "ok"
        $error = "OK";
        //Aquí se redirreciona a la página donde el cliente va a comprar.
        header("Location: Cestacompras.php");
        //Si la contraseña no es la correcta se inicia la variable error y se iguala a "incorrecto"
    }else{
        $error = "incorrecto";
    }
    /*Si la contraseña y el usuario tienen datos vacios se manda a este else y se iguala la variable error a "vacio", 
    la página se queda en el index y se pasa la variable para que sea manejada en el index.*/
}else{
    $error = "vacio";
    header("Location: index.php?error=$error");
}
//Aquí se trata la variable error cuando el usuario o la contraseña introducido no son correctos y se marca en la pantalla que estos son incorrectos.
if($error == "incorrecto"){
    echo "<h2>El usuario o contraseña no son correctos</h2>";
}
?>