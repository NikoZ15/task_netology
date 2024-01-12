<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = htmlspecialchars($_POST['username']);

    // Сохраняем имя пользователя в сессии
    $_SESSION['username'] = $username;

    // Перенаправляем браузер на index.php
    header('Location: index.php');
    exit();
} else {
    // Если данные формы не были отправлены, перенаправляем на главную страницу
    header('Location: index.php');
    exit();
}
?>
