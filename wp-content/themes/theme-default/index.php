<?php get_header(); ?>

<div class="container py-5">
  <div class="row">
    <aside id="aside" class="col col-sm-12 col-md-12 col-lg-3">
      <div class="row">
        <div class="col col-sm-12 col-md-12 col-lg-12">
          <h4 class="title_search">O que você busca?</h4>
          <form class="">
            <input class="form-control" type="search" placeholder="Pesquisar...">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12 col-md-12 col-lg-12">
          <h4>Ordenar Produtos</h4>
          <form class="">
            <input class="form-control" type="search" placeholder="Pesquisar">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col col-sm-12 col-md-12 col-lg-3">
          <h4>Categorias</h4>
        </div>
      </div>
    </aside>
    <main class="col col-sm-12 col-md-12 col-lg-9">
      <section class="row">
      <?php global $more; ?>
        <?php while (have_posts()): the_post() ?>
          <div class="col col-sm-12 col-md-6 col-lg-4 mb-2">
            <article class="card p-0">
              <div class="card-body">
                <h5 class="card-title">
                  <?php the_title(); ?>
                </h5>

                <div class="card-text text-truncate mb-2"><?php the_content( 'Ler mais ...' ); ?></div>

                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">Visitar</a>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      </section>
      <div class="row py-2">
    
        <nav aria-label="Navegação de página exemplo">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
          </ul>
        </nav>
      </div>
      <?php get_footer(); ?>
      </main>
  </div>
</div>
</div>