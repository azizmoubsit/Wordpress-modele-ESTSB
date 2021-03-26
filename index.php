<?php get_header(); ?>
<?php if(!isset($_GET['s'])){?>
    <div class="container">
    <div class="carousel-container">
    <div id="carouselExampleCaptions" class="container carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php $i=1;if(have_posts(  )) while(have_posts(  )){ the_post(  );?>
        <div class="carousel-item <?php if($i==1) echo'active';?>">
        <a href="<?php the_permalink( );  ?>"><?php the_post_thumbnail( 'post-thumbnail', ['class'=> 'd-block w-100', 'alt' => '']); ?></a>
        
        <div class="carousel-caption d-none d-md-block">
            <h5><?php the_title(  ) ?></h5>
            <p><?php the_excerpt(  ) ?></p>
        </div>
        </div>
        <?php $i++; }?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
    <?php } ?>
    <div class="container actualites">
        <h2 class="text-center"><span class="h2-border">Actualités</span></h2>
        <div class="row">
        <?php if(have_posts(  )) while(have_posts(  )){ the_post(  );?>
        <div class="col-md-4 col-sm-6 col-12 cards">
        <div class="card h-100 bg-light">
            <a href="<?php the_permalink( );  ?>"><?php the_post_thumbnail( 'post-thumbnail', ['class'=> 'card-img-top', 'alt' => '', 'style'=>'height:auto;' ]); ?></a>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(  ); ?></h5>
                <p class="card-text"><?php the_excerpt(  ) ?></p>
                <a href="<?php the_permalink( );  ?>">Lire la suite...</a>
            </div>
        </div>
        </div>
        <?php } ?>
        </div>
    </div>

    <div class="filieres text-uppercase bg-light">
            <h2 class="text-center"><span class="h2-border">Filières DUT</span></h2>
            <div class="div-fil">
                <div>
                    <h4>Génie informatique</h4>
                    <img src="<?php echo get_template_directory_uri()."/assets/img/gi.jpg"?>" width="250" height="250" alt="" srcset="">
                </div>
                <div>
                    <h4>Génie agro-environnemet</h4>
                    <img src="<?php echo get_template_directory_uri()."/assets/img/ga.png"?>" width="250" height="250" alt="" srcset="">
                </div>
                <div>
                    <h4>Technique de management</h4>
                    <img src="<?php echo get_template_directory_uri()."/assets/img/tm.jpg"?>" width="250" height="250" alt="" srcset="">
                </div>
            </div>
    </div>
    </div>
    
<?php get_footer();?>