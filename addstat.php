<?php
    require_once("connect.php");

    $db->addStatistic($_POST['user_id'],$_POST['white_id'],$_POST['black_id'],$_POST['stat']);
