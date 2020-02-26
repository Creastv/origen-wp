<div class="col-md-3 col-sm-4">
    <div class="box-border">
  <?php
                $tax = 'experiencia';
                $terms = get_terms( $tax, $args = array(
                'hide_empty' => false, )); 
                 $currentterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
            ?>
            <?php if( ! empty( $terms ) ) : ?>
                <ul class="nav-fichias">
                <?php foreach( $terms as $term ) : ?>
                     <?php  $class = $currentterm->slug == $term->slug ? 'active' : '' ; ?>  
                    <li class="<?php echo $term->slug; ?> <?php echo $class; ?> " ><a href="<?php echo get_term_link($term) ?>"><img src="<?php the_field('imagen_descatada', $term); ?>" /> <?php echo $term->name ?></a></li>
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
