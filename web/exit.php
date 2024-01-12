<?php
session_start();

// Очищаем переменную сессии с именем пользователя
unset($_SESSION['username']);

// Перенаправляем браузер на index.php
header('Location: index.php');
exit();
?>
