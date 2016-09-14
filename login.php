<?php

session_start();

// Exibir Erros Oriundos do PHP
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

if(!empty($_SESSION['usuario'])) header("location: ./");

else {

echo "<body id='login'>";

// Incluindo Corpo
include "includes/login.html";

// Incluindo rodapé Padrão
include "includes/rodape.html";

echo "</body>";

}

