<?php
    require_once("connect.php");
    
    $db = new DB();
    $db->connect($ip,$username,$password,"test");

    if (isset($_GET['reset'])) $db->resetDatabase(); //TODO make this more production oriented
    if (!isset($_POST['type'])){
        $question = $db->getQuestion('Geography');
        echo "<question>";
        echo $question['Question'];
        echo "</question>";
        echo "<answer>";
        echo $question['Answer'];
        echo "</answer>";
    }
?>
