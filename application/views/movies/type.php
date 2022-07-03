<?php if($this->dx_auth->is_admin()) {
      echo '<a href="/movies/"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>';
    } ?>


  <!-- <?php foreach ($movie_data as $key => $value): ?>
    <div class="row">
      <div class="well clearfix">
        <div class="col-lg-3 col-md-2 text-center">
          <img class="img-thumbnail" src="<?php echo $value['poster']; ?>" alt="<?php echo $value['name']; ?>">
          <p><?php echo $value['name']; ?></p>
        </div>

        <div class="col-lg-9 col-md-10">
          <p><?php echo $value['descriptions']; ?></p>
        </div>
        
        <div class="col-lg-12 col-md-12">
          <a href="/movies/view/<?php echo $value['slug']; ?>" class="btn btn-lg btn-warning pull-right">подробнее</a>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php echo $pagination; ?> -->

  <section>
    <div class="default-container">
      <div class="info-film-movie">
        <?php foreach ($movie_data as $key => $value): ?>
        <div class="info-films">
          <div class="info-poster">
            <a href="/movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster']?>" alt="<?php echo $value['name']?>"></a>
          </div>
          <div class="info">
            <h2><?php echo $value['name']?></h2>
            <p><?php echo $value['descriptions']?></p>
            <button onclick="location.href='/movies/view/<?php echo $value['slug'];?>'" class="watch">СМОТРЕТЬ</button>
          </div>
        </div>
        <?php endforeach ?>

        <?php echo $pagination; ?> -->
      </div>
    </div>
  </section>