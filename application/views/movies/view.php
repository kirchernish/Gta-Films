<main>

        <section class="default-container">
            <div class="player">
                <iframe src="<?php echo $player_code;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section class="default-container">
            <ul class="tabs-titles">
                <li class="active"><?php echo $title?></li>
            </ul>

            <div class="tabs">
                <div class="tab">
                    <p><?php echo $descriptions_movie?></p>
                </div>
                <div class="tab">Актёрский состав</div>
                <div class="tab">Коментарии</div>
            </div>
        </section>


        <section class="default-container">
            <p class="lbl-p"><a href="">Другие</a></p>
            <div class="posters-now-movie">
                <?php foreach ($movieRandom as $key => $value): ?>
                <div class="poster-now-movie"><a href="/movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster'];?>" alt="<?php echo $value['name'];?>"></a>
                    <div class="poster-now-lbls-movie">
                        <p><?php echo $value['name']?></p>
                    </div>   
                </div>
                <?php endforeach?>               
            </div>
        </section>
    </main>