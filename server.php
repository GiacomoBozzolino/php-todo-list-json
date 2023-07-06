<?php
// recupero il contenuto del file
    $array= file_get_contents('data/todo_list.json');

    // converto il contenuto del file così da usarlo in php
    $phpArray= json_decode ($array, true);
   
    if(isset($_POST['obj'])){
        array_push( $phpArray, $_POST['obj'] );
      
        file_put_contents('data/todo_list.json', json_encode($phpArray));

       
    }

    header('Content-Type: application/json');
    echo json_encode($phpArray);
        




?>