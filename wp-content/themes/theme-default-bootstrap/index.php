<?php get_header(); ?>

<main class="container mt-5">
  <section class="introduction">
    <h1 class="display-4">
      Your Name
    </h1>
    <p class="fs-3 fw-light text-muted">
      Your Profession
    </p>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="http://localhost/wordpress/wp-content/uploads/2024/10/img1.jpeg" alt="" class="img-fluid rounded">
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5">
        <h3>About
        </h3>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet incidunt ex nemo at, sed perferendis eaque quisquam eum nisi vel qui, nihil voluptas nostrum esse molestiae, non fuga praesentium!
        </p>
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="container">
      <h3 class="mt-5 mb-3">Featured Posts
      </h3>
      <div class="row">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="col-lg-3 col-6">
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

            </div>
          <?php
          endwhile;
        else:
          ?>
          <p>Não tem nada inda pra mostrar...</p>
        <?php
        endif
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>