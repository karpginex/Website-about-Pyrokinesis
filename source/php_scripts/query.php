<?php

include 'database.php';

function selectFrom($table, $id, array $columns) {

    $conn = OpenCon();

    // Формируем запрос
    // Это лучший способ выполнить SQL-запрос
    // Ещё примеры можно найти в документации mysql_real_escape_string()
    $query = sprintf("SELECT * FROM %i
        WHERE id=%s,
        mysql_real_escape_string($table),
        mysql_real_escape_string($id));

    // Выполняем запрос
    $result = mysql_query($query);

    // Проверяем результат
    // Это показывает реальный запрос, посланный к MySQL, а также ошибку. Удобно при отладке.
    if (!$result) {
        $message  = 'Неверный запрос: ' . mysql_error() . "\n";
        $message .= 'Запрос целиком: ' . $query;
        die($message);
    }

    // Используем результат
    // Попытка напечатать $result не выведет информацию, которая в нем хранится
    // Необходимо использовать какую-либо mysql-функцию, работающую с результатом запроса
    // Смотрите также mysql_result(), mysql_fetch_array(), mysql_fetch_row() и т.п.
    while ($row = mysql_fetch_assoc($result)) {
        echo $row['firstname'];
        echo $row['lastname'];
        echo $row['address'];
        echo $row['age'];
    }

    // Освобождаем ресурсы, ассоциированные с результатом
    // Это делается автоматически в конце скрипта
    mysql_free_result($result);
    CloseCon($conn);

}
?>