<article>
    <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
    <h1><?php the_title(); ?></h1>
    <p>Categorias: <?php the_category(' '); ?></p>
    <p>Por <span><?php the_author(); ?></span> em <?php echo get_the_date(); ?></p>
    <p><?php the_tags('Tags: ', ',') ?></p>
    <p><?php the_excerpt(); ?></p>
</article>