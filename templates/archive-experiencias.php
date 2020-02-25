<div class="col-md-3 col-sm-4">
    <div class="box-border">
        <?php
        $terms = get_the_terms( get_the_ID(), 'experiencia' );
        if( ! empty( $terms ) ) : ?>
            <ul  class="nav-fichias">	
                <?php foreach( $terms as $term ) : ?>          
                <li class="<?php echo $term->slug; ?>">
                    <a href="<?php echo get_term_link($term) ?>">                                          
                        <img src="<?php the_field('imagen_descatada', $term); ?>" />
                        <?php echo $term->name ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul> 
        <?php endif; ?>
    </div>
</div>
<div class="col-md-9 col-sm-8">
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

<div class="col-md-12 text-center">
 <?php cr_pagination(); ?>
</div>
