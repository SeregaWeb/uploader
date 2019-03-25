<?php

    // print_r($_POST['method']);
    $method = $_POST['method'];
    if($method == 'upload'){
    include '../function/function.php';

        echo $method;
        uploadFile();
    }
    elseif($method == 'delete'){
    include '../function/function.php';
        echo $method;

        deleteFile();
    }
    elseif ($method == 'show') {
    include '../function/function.php';

        echo $method;

        showFile();
    }

?>