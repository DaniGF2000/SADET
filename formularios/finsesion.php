<?php
    include_once '../validar.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../index.html");

?>