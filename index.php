<?php
    require_once("connect.php");
    
    if (isset($_GET['reset'])) $db->resetDatabase(); //TODO make this more production oriented
?>
