<?php
    require 'glob_funcc.php';
    if(!isset($_GET['id']))
    {
        exit;
    }


    $userId= $_GET['id'];

    $user = getsellerByID($userId);
    if(!$user)
    {
        exit;
    }
    delete_seller($id);
    getseller();
?>