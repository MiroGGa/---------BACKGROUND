<?php
session_start();
require "block/header.html";

?>
<h1>регистрация</h1>
<form action="contact_check.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Введите имя пользователя"><br>
    <div><?=$_SESSION['name_error']?></div>
    <input type="email" name="email" placeholder="Введите email"><br>
    <div><?=$_SESSION['email_error']?></div>
    <input type="password" name="pass" placeholder="Введите пароль"><br>
    <div><?=$_SESSION['password_error']?></div>
    <input type="submit" value="Отправить">
</form>
<?php
require "block/under.html";
?> 