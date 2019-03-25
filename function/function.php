<?php
include '../config/config.php';
function uploadFile(){
    echo 'im upload files ---- /n ';
    echo $_FILES['userfile']['name'];
    echo UPLOAD_PATH;
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['name'], UPLOAD_PATH)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";
}

function deleteFile(){

    return true;
}

function showFile(){
    echo 'im show';
        // $files = Array();
        // return files[];
}

?>