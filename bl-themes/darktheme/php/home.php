<?php if ($WHERE_AM_I == 'home'): ?>
    <!-- hero -->
    <div class="bg-dark text-secondary pb-5 text-center">
      <div class="col-sm-12">
        <h1 class="display-5 fw-bold text-white pt-3"><?php echo $site->slogan(); ?></h1>
        <div class="col-lg-6 mx-auto">
          <p class="fs-5 mb-4"><?php echo $site->description(); ?></p>
        </div>
      </div>
    </div>
    <!--/ hero -->
<?php endif; ?>   
    <!-- content -->
    <div class="container pb-5">
    <div class="row pb-4">
      <h2><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('Inspiration for you')) ?></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php if (empty($content)) { $language->p('No pages found'); } ?>
    <?php foreach ($content as $page): ?>
      <div class="col">
        <a class="text-white" href="<?php echo $page->permalink(); ?>">
        <div class="card h-100 bg-dark shadow">
          <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
          <div class="card-body">
            <h3 class="card-title pb-2"><?php echo $page->title(); ?></h3>
            <p class="card-text text-secondary"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
          </div>
          <div class="card-footer">
            <small class="text-secondary"><i class="far fa-folder text-warning"></i>&nbsp; <?php echo $page->category() ?>&nbsp;&nbsp; <i class="far fa-clock text-warning"></i>&nbsp;<?php echo $page->date(); ?></small>
          </div>
        </div>
        </a>
      </div>
    <?php endforeach ?>
    </div>
    </div>
    <!--/ content -->
    
    <!-- fo nav -->
    <?php if (Paginator::numberOfPages()>1): ?>
    <div class="container pb-5 text-center">
    <div class="btn-group rounded-pill" role="group" aria-label="Basic example">
      <?php if (Paginator::showPrev()): ?>
      <a class="btn btn-dark text-secondary" href="<?php echo Paginator::previousPageUrl() ?>" role="button"><i class="fas fa-arrow-left"></i> Previous</a>
      <?php endif ?>
      <?php if (Paginator::showNext()): ?>
      <a class="btn btn-dark text-secondary" href="<?php echo Paginator::nextPageUrl() ?>" role="button">Next <i class="fas fa-arrow-right"></i></a>
      <?php endif ?>
    </div>
    </div>
    <?php endif ?>
    <!--/ fo nav -->