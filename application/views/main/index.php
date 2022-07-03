<main>

        <section>
            <ul class="hero">
                <li>
                    <img class="main-slider-img" src="assets/img/hero/22.jpg" alt="img">
                    <div class="default-container">
                        <div class="hero-movie">
                            <p>Паранормальные явления</p>
                            <p>Неизвестный звонок поздней ночью поднимает главного героя и теперь ему предстоит отправится в путешествие. Он побывает в разных уголках штата, познакомится с интересными людьми и наткнется на нечто... Неизвестное. Коннор даже не догадывается, на сколько долгим окажется это путешествие и то, что он запомнит его на всю жизнь.</p>
                            <button onclick="location.href='/movies/view/paranormal-phenomena'">СМОТРЕТЬ</button>
                        </div>
                    </div>
                </li>

                <li>
                    <img class="main-slider-img" src="assets/img/hero/33.jpg" alt="img">
                    <div class="default-container">
                        <div class="hero-movie">
                            <p>Форсаж</p>
                            <p>Его зовут Брайан, и он - фанат турбин и нитроускорителей. Его цель - быть принятым в автобанду легендарного Доминика Торетто, чемпиона опасных и незаконных уличных гонок. Но это лишь часть правды... </p>
                            <button onclick="location.href='/movies/view/the-fast-and-the-furious'">СМОТРЕТЬ</button>
                        </div>
                    </div>
                </li>

                <li>
                    <img class="main-slider-img" src="assets/img/hero/44.jpg" alt="img">
                    <div class="default-container">
                        <div class="hero-movie">
                            <p>Небесный ястреб</p>
                            <p>Рональд О’Нил, более известный под прозвищем Небесный Ястреб. Опытный военный, летчик ВВС! Мы знаем о нем по фильму Хранители, в котором так много слышали о его прошлом... А теперь, еще и увидим!</p>
                            <button onclick="location.href='/movies/view/sky-hawk'">СМОТРЕТЬ</button>
                        </div>
                    </div>
                </li>

                <li> 
                    <img class="main-slider-img" src="assets/img/hero/55.jpg" alt="img">
                    <div class="default-container">
                        <div class="hero-movie">
                            <p>Голос будущего</p>
                            <p>На дворе 2010 год ! Прошло два года с момента событий первого сезона ! Майкл возвращается с двухнедельного отдыха обратно, в Лос Сантос ! Жизнь продолжается и похоже, что все хорошо… На первый взгляд !</p>
                            <button onclick="location.href='/movies/view/the-voice-of-the-future'">СМОТРЕТЬ</button>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="default-container">
                <div class="next-main-slider-dots">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="fader-bg">
                <div class="fader-gradient-0"></div>
                <div class="fader-gradient-1"></div>
            </div>
        </section>
        <section class="default-container">
            <p class="lbl-p">Вышли</p>
            <div class="posters-now">
                <?php foreach ($now as $key => $value): ?>
                <div class="poster-now">
                    <a href="movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster_now'];?>" alt="<?php echo $value['name'];?>"></a>
                    <div class="poster-now-lbls">
                        <p><?php if ($value['category_id'] == 2) {
                            echo 'S', $value['season'], " ", 'E', $value['episod'];
                        } else {
                            echo 'Фильм';
                        }?></p>
                        <p><?php echo $value['name'];?></p>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </section>

        <section class="default-container">
            <p class="lbl-p"><a href="">Фильмы</a></p>
            <div class="posters-now-movie">
                <?php foreach ($movie as $key => $value): ?>
                <div class="poster-now-movie"><a href="/movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster'];?>" alt="<?php echo $value['name'];?>"></a>
                    <div class="poster-now-lbls-movie">
                        <p><?php echo $value['name']?></p>
                    </div>   
                </div>
                <?php endforeach?>               
            </div>
        </section>
    
        <section class="default-container">
            <p class="lbl-p"><a href="">Сериалы</a></p>
            <div class="posters-now-movie">
                <?php foreach ($serials as $key => $value): ?>
                <div class="poster-now-movie"><a href="/movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster'];?>" alt="<?php echo $value['name'];?>"></a>
                    <div class="poster-now-lbls-movie">
                        <p><?php echo $value['name'];?></p>
                    </div>   
                </div>
                <?php endforeach?>
            </div>
        </section>
    </main>