<?php get_header() ?>
<main class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="<?php bloginfo('url'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <?php while(have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h>
                <div>
                <?php the_content( 'Ler mais ...' ); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>
