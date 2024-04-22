<?php
$usuario = "";
$contrasena = "D153n0W3b2*";

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena_ingresada = $_POST['contrasena'];

    $nombres_validos = array("juan", "pedro", "maria", "raul");
    if (in_array($usuario, $nombres_validos) && $contrasena_ingresada == $contrasena) {
        echo "Usuario y contraseña válidos.";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<form method="post">
    Usuario: <input type="text" name="usuario"><br>
    Contraseña: <input type="password" name="contrasena"><br>
    <input type="submit" value="Enviar">
</form>