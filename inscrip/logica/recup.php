<?php

use function Symfony\Component\VarDumper\Dumper\esc;

$nombre=$_POST['recup_usu'];
$imal=$_POST['recup_correo'];
$nombre2="juena";
$imal2="angel11";


if ($imal==$imal2 && $nombre==$nombre2) {
  echo "imal y usu son iguales";
}elseif($imal!=$imal2 || $nombre==$nombre2){
  echo"imal incorecto";
}elseif($imal==$imal2 || $nombre!=$nombre2){
  echo"nombre incorecto";
}else{
  echo" nombre y correo incorrecto";

}






?>