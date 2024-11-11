<?php
$nombre= $_POST["nombre"];
$documento= $_POST["documento"];
$edad= $_POST['edad'];


if ($edad > 18) {
    
    echo ("Señor ".$nombre" Número de documento: ".$documento" Registro exitoso y su edad es: ".$edad);
}

else{
    echo ("Error");
}
