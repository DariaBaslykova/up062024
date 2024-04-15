<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="feedback" method="POST" action="index.php">
        <label>Ваше имя: <input type="text" name="name"></label>
        <label>Ваш email: <input type="text" name="email"></label> 
        <label>Сообщение: <textarea name="message"></textarea></label>
        <input type="submit" name="send" value="Отправить"> 
    </form>
    <?php
        if (isset($_POST)) { 
            echo "Имя: " . $_POST['name']; 
            echo "<br>Email: " . $_POST['email']; 
            echo "<br>Сообщение: " . $_POST['message']; 
        }
    ?>
</body>
</html>