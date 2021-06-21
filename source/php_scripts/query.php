<?php

include 'database.php';

function selectFrom($table, $id, array $columns) {

    $conn = OpenCon();

    // Формируем запрос
    // Это лучший способ выполнить SQL-запрос
    // Ещё примеры можно найти в документации mysql_real_escape_string()
    
    $query;

    if(!is_null($id)) {
        $query = sprintf("SELECT * FROM %s
        WHERE id = %s",
        mysqli_real_escape_string($conn,$table),
        mysqli_real_escape_string($conn,$id));
    }
    else {
        $query = sprintf("SELECT * FROM %s",
        mysqli_real_escape_string($conn,$table));
    }

    // Выполняем запрос
    $result = mysqli_query($conn, $query);

    // Проверяем результат
    // Это показывает реальный запрос, посланный к MySQL, а также ошибку. Удобно при отладке.
    if (!$result) {
        $message  = 'Неверный запрос: ' . mysqli_error($conn) . "\n";
        $message .= 'Запрос целиком: ' . $query;
        die($message);
    }

    // Используем результат
    // Попытка напечатать $result не выведет информацию, которая в нем хранится
    // Необходимо использовать какую-либо mysql-функцию, работающую с результатом запроса
    // Смотрите также mysql_result(), mysql_fetch_array(), mysql_fetch_row() и т.п.

    $array_result = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $final_row = array();
        
        foreach($columns as $column)
        {
            $final_row[$column] = $row[$column];
        }
        
        array_push($array_result, $final_row);
    }


    // Освобождаем ресурсы, ассоциированные с результатом
    // Это делается автоматически в конце скрипта
    mysqli_free_result($result);
    CloseCon($conn);

    return $array_result;
}
?>