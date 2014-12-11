<?php
    SESSION_START();
    session_destroy();
    echo"<script type='text/javascript'> alert('Sesion cerrada.')</script>";
    echo  "<script type='text/javascript'> document.location.href='index.php';</script>";
?>
