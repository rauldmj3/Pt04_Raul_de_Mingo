<?php
//Raúl de Mingo Jiménez
include_once "../controlador/controlador.php";
require_once '../vista/login.vista.php';
function checkData(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email=validar($_POST["email"]);
        $pass=validar($_POST["pass"]);
        if(!checkPass($email,$pass)){
            login($email);
        }
    }
}

function login($email){
    obrirArticlesSession($email);
    
}

?>