<?php
/*
Template Name: Page Default
*/
?>
<?php get_header(); ?>
<img
  class="img-responsive"
  src="<?php header_image(); ?>"
  height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>"
  alt="" />
<main class="container mt-5">
  <div class="row">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <p>Autor: <?php the_author(); ?></p>
        <p><?php the_content(); ?></p>
      <?php
      endwhile;
      ?>
      <p>Não tem nada ainda pra mostrar</p>
    <?php
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>

/**
 Seu aplicativo perdeu o vínculo com sua conta. Para voltar a acessá-lo, solicite a desativação da verificação em duas etapas em e.gov.br/2fa. (ERL0004500)
*/