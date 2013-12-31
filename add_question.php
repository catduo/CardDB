<?php
    require_once("connect.php");
    
    $db = new DB();
    $db->addQuestion($_POST['question'],$_POST['answer'],$_POST['type'],$_POST['category']);
    echo "question added";
    return;
?>
