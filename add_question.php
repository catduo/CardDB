<?php
    require_once("connect.php");
    
    $db = new DB();
    $db->connect($ip,$username,$password,$dbname);

    if (isset($_GET['reset'])) $db->resetDatabase(); //TODO make this more production oriented
    if (isset($_POST['category'])){
        $db->addQuestion($_POST['question'],$_POST['answer'],$_POST['type'],$_POST['category']);
        echo "question added to db";
        return;
    }
?>
