<?php 
session_start();
function usuarioEstaLogado() {
    //return isset($_COOKIE["usuario_logado"]);
    return isset($_SESSION["usuario_logado"]);
}

function vereficaUsuario() {
    //autorizando cadastrar produto somente se estiver longado(cookie), e para estar totalmente protegido add no adicionaproduto.php
    if (!usuarioEstaLogado()){
        $_SESSION["danger"] = "Voçe não tem acesso a essa funcionalidade.";
        header("Location: index.php");
        die();
    }
}

function usuarioLogado() {
   //return $_COOKIE["usuario_logado"];
   return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
    //setcookie("usuario_logado", email, time() + 60);
    $_SESSION["usuario_logado"] = $email;
}

function logout(){
    //opição 1 unset($_SESSION["usuario_logado"]) ou:
    session_destroy();
    //necessario para que o logout funcione:
    session_start();
}