<?php

    require_once "Models/usuarios_model.php";
    $user = new usuarios_model();
    $datos = $user->get_usuarios();


    require_once "View/usuarios_views.php";













?>