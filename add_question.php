<?php
    require_once("connect.php");
    
    $db = new DB();
    if (isset($_POST['category'])){
        $db->addQuestion($_POST['question'],$_POST['answer'],$_POST['type'],$_POST['category']);
	echo "question added";
        return;
    }
    else{
        echo "incomplete information";
    }
?>
