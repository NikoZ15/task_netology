<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
</head>
<body>

    <?php
    // Включаем HTML-код с информацией об авторе
    include 'author_info.php';
    ?>

    <?php
    // Проверяем, существует ли переменная сессии с именем пользователя
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        $username = htmlspecialchars($_SESSION['username']);
        echo "<h2>Добро пожаловать, $username!</h2>";
        echo '<p><a href="exit.php">Выйти</a></p>';
    } else {
        // Если переменной нет, отображаем форму
        echo '
        <h2>Введите ваше имя:</h2>
        <form action="post.php" method="post">
            <label for="username">Имя пользователя:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Отправить</button>
        </form>';
    }
    ?>

</body>
</html>
