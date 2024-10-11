<article class="col-lg-3 col-6">
    <h1><?php the_title(); ?></h1>
    <!-- thumbnail, medium, large, full -->
    <!-- <?php the_post_thumbnail('thumbnail'); ?> -->
    <?php the_post_thumbnail(array(160, 160)); ?>
    <p>Publicado em <?php echo get_the_date() ?> por <?php the_author() ?></p>
    <p>Categorias: <?php the_category(' ') ?></p>
    <p><?php the_tags('Tags: ', ', ') ?></p>
    <p><?php the_content(); ?></p>
    <!-- <img src="http://localhost/wordpress/wp-content/uploads/2024/10/img2.jpeg" alt="" class="figure-img img-fluid rounded">
            <figcaption class="figure-caption">A caption for the above image.
            </figcaption> -->

</article>