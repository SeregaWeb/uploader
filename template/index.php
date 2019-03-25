<?php
$show = 0;

if($show == 0){    
?>

<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="router/router.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" name="method" value="upload" />
</form>

<form action="router/router.php" method="post">
    <input type="submit" name="method" value="show">
</form>
<?
}elseif($show == 1){
?>

    <table border="1">
        <thead>
        <tr>
            <td>№</td>
            <td>name</td>
            <td>size</td>
            <td>delete</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

<?
}
?>