<?php include('tpl/header.php')?>
        <section>
            <div class="block">
                <h2 class="h1">Мои работы</h2>
                <div style="clear: both"></div><!--ie-8 hack-->
                <div class="works" >
                    <div class="image"><div class="h-img"><div class="title">название</div></div>
                        <img src="style/img/works.png" width="179px" height="125"/>
                    </div>
                    <a href="/" class="red">--closed--</a>
                    <p>Информация о проекте 1 превью 2 строки....</p>
                </div>
                <div class="works" >
                    <a href="/"><div class="image"><div class="h-img"><div class="title">название</div></div>
                        <img src="style/img/works.png" width="179px" height="125"/>
                    </div>
                    mysite.com</a>
                    <p>Информация о проекте 1 превью 2 строки....Информация о проекте 1 превью 2 строки....Информация о проекте 1 превью 2 строки....Информация о проекте 1 превью 2 строки....</p>
                </div>
                <div class="works" >
                    <div class="image"><div class="h-img"><div class="title">название</div></div>
                        <img src="style/img/works.png" width="179px" height="125"/>
                    </div>
                    <a href="/">mysite.com</a>
                    <p>Информация о проекте 1 превью 2 строки....</p>
                </div>
                <div class="works" >
                    <div class="image"><div class="h-img"><div class="title">название</div></div>
                        <img src="style/img/works.png" width="179px" height="125"/>
                    </div>
                    <a href="/">mysite.com</a>
                    <p>Информация о проекте 1 превью 2 строки....</p>
                </div>
                <?php if(isset($_SESSION["check"])){?><a class="add"></a><?php } ?>
            </div>

        </section>
<?php include('tpl/footer.php')?>