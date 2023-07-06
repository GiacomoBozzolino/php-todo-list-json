<?php
// recupero il contenuto del file
    $array= file_get_contents('data/todo_list.json');




    $phpArray= json_decode ($array, true);
   

    header('Content-Type: application/json');

    echo json_encode($phpArray)
        




?>