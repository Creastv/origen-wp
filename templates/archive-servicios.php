
<div class="col-md-12 col-sm-12">
    <div class="box-border">
        <div class="" id="grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="ficha">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="leemas">lee más</a>
                        <hr>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>	                               
        </div>
    </div>
</div>

<div class="col-md-12 text-center">
 <?php cr_pagination(); ?>
</div>
