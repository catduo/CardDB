<?php
    require_once("connect.php");
    
    $cards = $db->getAllCards();
    echo "<cards>\n";
    foreach ($cards as $card) {
        echo "<card>\n";
        foreach ($card as $k=>$v) {
            echo "\t<$k>$v</$k>\n";
        }
        echo "</card>\n";
    }
    echo "</cards>\n";
