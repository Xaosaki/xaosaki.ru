<?php include('tpl/header.php')?>
        <section>
            <div class="contact">
                <h1>У вас интересный проект? Напишите мне.</h1>

                <form action="">
                    <label>Имя<input type="text" placeholder="Как к Вам обращаться?"></label>
                    <label>E-mail<input type="text" placeholder="Куда мне писать?"></label>
                    <label>Сообщение <textarea placeholder="Кратко, в чем суть?"></textarea></label>
                    <label class="capcha">Введите код, указанный на картинке <img src="style/img/capcha.png" alt="capcha"/><input type="text" placeholder="Введите код"/></label>

                    <input type="submit"/>
                    <input type="reset"/>
                </form>
            </div>

        </section>
<?php include('tpl/footer.php')?>