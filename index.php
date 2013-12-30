<?php
    require_once("connect.php");
    
    $db = new DB();
    $db->connect($ip,$username,$password,$dbname);

    if (isset($_GET['reset'])) $db->resetDatabase(); //TODO make this more production oriented
    if (isset($_POST['category'])){
        $question = $db->getQuestion($_POST['category']);
        echo "<question>";
        echo $question['Question'];
        echo "</question>";
        echo "<type>";
        echo $question['Type'];
        echo "</type>";
        echo "<answer>";
        echo $question['Answer'];
        echo "</answer>";
        return;
    }
?>
