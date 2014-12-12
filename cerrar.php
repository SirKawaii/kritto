<?php
    //al entrar a esta pagina se cierra la session,

    SESSION_START();

    //destrucion de variables de session.
    session_destroy();

    //envia un mensaje y vuelve a index.
    echo"<script type='text/javascript'> alert('Sesion cerrada.')</script>";
    echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
?>
