<?php
session_start();

// Удаляем сессию
session_unset();
session_destroy();

// Перенаправляем пользователя на главную страницу или на другую страницу
header("Location: ../Index.php");
exit;
?>
