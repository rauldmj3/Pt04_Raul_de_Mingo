<?php
//Raúl de Mingo Jiménez
include "../controlador/controlador.php";

function checkData(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=validar($_POST["name"]);
        $email=validar($_POST["email"]);
        $pass=validar($_POST["pass"]);
        $pass2=validar($_POST["pass2"]);
        if(checkPass($email,$pass)){

        }
    }
}

function login(){
    
}

require '../vista/register.vista.php';
?>