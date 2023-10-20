<?php
//Raúl de Mingo Jiménez
include "../controlador/controlador.php";

function checkData(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=validar($_POST["email"]);
        $pass=validar($_POST["pass"]);
        if(checkPass($email,$pass)){
            login($email);
        }
    }
}

function login($email){
    obrirArticlesSession($email);
    
}
require '../vista/login.vista.php';
?>