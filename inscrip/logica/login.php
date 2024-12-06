<?php

$usuariotext=$_POST['login_nombre'];
$clavetext=$_POST['login_contraseña'];

echo "<strong> ¡Hola! ".$usuariotext."</strong> <br>";

$prueba=fopen("usuarios.txt", "r") or die ("Error");
$pantallas="";

while(!feof($prueba)){
$linea=fgets($prueba);

$saltodelinea=nl2br($linea);
$usuario=explode(",",$saltodelinea);
$boolusuario=false;

if($usuariotext==$usuario[1]){
    if($clavetext==$usuario[2]){
       $boolusuario=true;
	   
       $pantallas=$usuario[3];
	   
       break;
    }else{
        $boolusuario=false;
    }

}else{
    $boolusuario=false;
}

}

if($boolusuario==false){
    header("Location: error.html");
exit();
}


switch ($pantallas) {
	case "medico":
		header("Location:../../estub/estud.php");
		exit();
	case "enfermeros":
		header("Location: pantallaenfermeros.html");
		exit();
	}




fclose($prueba);//cerrar el archivo
?>