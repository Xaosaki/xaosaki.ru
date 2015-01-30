<?php include('tpl/header.php')?>
        <section>
            <div class="contact">
                <h2 class="h1">У вас интересный проект? Напишите мне.</h2>
                <form class="mailForm">
                    <label>Имя <span class="tooltip tooltip_left">Введите имя</span> <input type="text" name="name" placeholder="Как к Вам обращаться?"></label>
                    <label>E-mail<span class="tooltip tooltip_right">Введите пароль</span><input type="text" name="email" placeholder="Куда мне писать?"></label>
                    <label>Сообщение <span class="tooltip tooltip_left">Введите текст</span><textarea type="text" id="message" placeholder="Кратко, в чем суть?"></textarea></label>
                    <label class="capcha">Введите код, указанный на картинке <img src="captcha.php" alt="capcha"/><span class="tooltip tooltip_right">Введите код</span><input type="text" name="captcha" placeholder="Введите код"/></label>

                    <input type="submit" value="Отправить"/>
                    <input type="reset" value="Очистить"/>
                </form>
            </div>

        </section>
<?php include('tpl/footer.php')?>