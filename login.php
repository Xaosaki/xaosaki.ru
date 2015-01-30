<?php
    if(@$_SESSION["check"] === true){
        header("Location: /");
    }
    session_start();
    if(isset($_POST['login']) && isset($_POST['password']) ){
        require_once('lib/db.php');
        $login = htmlspecialchars(trim(mb_strtolower($_POST['login'])), ENT_QUOTES);
        $pass = sha1(htmlspecialchars(trim($_POST['password']), ENT_QUOTES));
        $hash = sha1(md5(rand(1, 10000000)));



        $stmt = $mysqli->prepare("SELECT * FROM users WHERE login = ? AND pass = ?");
        $stmt->bind_param("ss", $login, $pass);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows() === 1){
            $stmt->close();
            $_SESSION["check"] = true;
            header("Location: /");
        } else {
            $error = "Неверные данные.";
        }
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в административную часть</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.js"></script>

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="style/js/main.js"></script>
</head>
<body>
    <?php if(isset($error)){ ?>
        <div class="error"><?php echo $error;?></div>
    <?php } ?>
    <form action="" method="post" class="login">
        <div class="login__title">Авторизируйтесь</div>
        <label class="login__input"><span>Логин</span>
            <input type="text" name="login" placeholder="Ваш логин"/>
        </label>
        <label class="login__input"><span>Пароль</span>
            <input type="password" name="password" placeholder="Ваш пароль"/>
        </label>
        <input class="login__submit" type="submit" value="Войти"/>
    </form>
</body>
</html>