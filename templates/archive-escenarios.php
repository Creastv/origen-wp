<?php $term = get_queried_object();
    $mapa = get_field('mapa', $term);
    $imgD = get_field('imagen_descatada', $term);
?>
<?php if( $mapa ): ?>
<div class="col-md-12 col-sm-12">
    <div class="box-border text-center">
        <div class="map-escenarios" style="background:url(<?php echo $mapa['url']; ?>">
            <div class="grad">
                <a href="<?php echo $mapa['url']; ?>"  class="html5lightbox btn btn-main"  >ver mapa</a>
           </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="col-md-9 col-sm-12 col-md-push-3 ">
    <div class="" id="grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            
                <div class="ficha">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="leemas">lee más</a>
                    <hr>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>	                               
    </div>
</div>
<div class="col-md-3 col-sm-12 col-md-pull-9 ">
    <?php if( $imgD ): ?>
        <div class="box-border text-center">
            <img class="img-responsive center-block" src="<?php echo $imgD['url']; ?>" alt="<?php echo $imgD['alt']; ?>"></a>
        </div>
    <?php endif; ?>
    
    <div class="box-border">
        <h4>Conoce los escenarios de un viaje histórico</h4>
        <?php
        $terms =  get_terms("escenario", array("orderby" => "slug", "parent" => 0, 'order' => 'DESC'));
        $currentterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
            echo '<ul class="nav-fichias">';
            foreach ($terms as $term) { 
                $class = $currentterm->slug == $term->slug ? 'active' : '' ;
                echo '<li class=" '. $class . '"> <a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
            }
            echo '</ul>';
        ?>
    </div>
</div>

<div class="col-md-12 text-center">
 <?php cr_pagination(); ?>
</div>