<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>19`th agency</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.js"></script>
    <script src="style/js/main.js"></script>
</head>
<body>
    <header>
        <div class="inside">
            <a href="/" class="inside-logo"></a>
            <div class="inside-social">
                <a href="http://vk.com/xaosaki" class="vk"></a>
                <a href="https://github.com/Xaosaki" class="git"></a>
            </div>
        </div>
        <div class="separator"></div>
    </header>
    <div class="wrapper">
        <aside>
            <nav>
                <?php
                switch($_SERVER['REQUEST_URI']){
                    case '/portfolio':?>
                        <a href="/">Про меня</a>
                        <a href="/portfolio" class="active">Мои работы</a>
                        <a href="/contact">Связаться со мной</a>

                    <?php break;
                    case '/contact':?>
                <a href="/">Про меня</a>
                <a href="/portfolio">Мои работы</a>
                <a href="/contact"  class="active">Связаться со мной</a>
                    <?php break;
                    default:?>
                <a href="/"  class="active">Про меня</a>
                <a href="/portfolio">Мои работы</a>
                <a href="/contact">Связаться со мной</a>
                <?php;}?>
            </nav>
            <div class="contacts">
                <h4>Контакты</h4>
                <a href="/" class="mail"><span>xaosaki@gmail.com</span></a>
                <a href="/" class="phone"><span>+797881o7839</span></a>
                <a href="/" class="skype"><span>xaosaki</span></a>
            </div>
        </aside>