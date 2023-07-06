<?php
// recupero il contenuto del file
    $array= file_get_contents('data/todo_list.json');

    // converto il contenuto del file così da usarlo in php
    $phpArray= json_decode ($array, true);
    
    if(isset($_POST['obj'])){
        $obj = [
            'text' => $_POST['obj'],
            'done'=> false,
            ];



        array_push($phpArray, $obj );

        $array_encoded = json_encode($phpArray);
      
        file_put_contents('data/todo_list.json',  $array_encoded);

       
    }

    header('Content-Type: application/json');
    echo json_encode($phpArray);
        




?>