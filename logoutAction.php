<?php 
    require_once ('verificaAcesso.php');
    /*Logout*/
    unset( $_SESSION['logado'] );
    header("location:index.php");
?>

<!-- Chama as variáveis de sessão que contêm informações sobre o usuário e estão disponíveis para todas as páginas durante seu acesso. -->