<?php get_header(); ?>

<main class="container mt-5">
  <?php get_sidebar('2') ?>
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
            <?php get_template_part('content', get_post_format()) ?>
          <?php
          endwhile;
        else:
          ?>
          <p>Não tem nada inda pra mostrar...</p>
        <?php
        endif
        ?>


        <?php
        $destaque = new WP_Query('type=post&posts_per_page=1&cat=6');
        if ($destaque->have_posts()):
          while ($destaque->have_posts()) :
        ?>
            <?php get_template_part('content', 'destaque') ?>
        <?php
            $destaque->the_post();
          endwhile;
          wp_reset_postdata();
        endif;
        ?>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>