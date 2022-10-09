<!-- Banner -->
<div class="bg-dark text-secondary px-4 py-5 mb-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.8) 100%), url(<?php echo Theme::src('img/goto.jpg'); ?>);background-size: cover;background-repeat:none;background-position: center;">
    <div class="py-5">
        <div class="container">
            <h1 class="display-5 text-white py-2 fw-bold"><?php echo $site->slogan(); ?></h1>
        </div>
    </div>
    <?php if (pluginActivated('pluginSearch')): ?>
    <div class="d-flex bg-white p-3 mt-2 col-md-6 shadow" style="position:absolute;left:5.5%;border-radius:10px;">
        <input id="search-input" class="form-control border-0 me-2" type="search" placeholder="Linux , VueJS , CoPilot..." aria-label="Search">
        <button onClick="searchNow()" class="btn" type="submit"><i class="fas fa-search fs-3" style="color:#d90a8f;"></i></button>
        <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
                }
                var elem = document.getElementById('search-input');
                elem.addEventListener('keypress', function(e){
                  if (e.keyCode == 13) {
                  searchNow();
                }
              });
            </script>
    </div>
    <?php endif ?>
</div>
<!--/ Banner -->
<!-- Content -->
<!-- Container -->
<div class="container mt-5 mb-5">
    <!-- Row -->
    <div class="row">
        <div class="col-md-9">
            <div class="row mt-4">
            <?php if ($WHERE_AM_I == 'home'): ?>
            <h5 class="fw-bold pb-2">Articles</h5>
                <!-- Card Content -->
                <?php
                  $featured = array_slice($content, 0, 2);
                  $content = array_slice($content, 2);
                  foreach ($featured as $page):
                ?>
                <div class="col-md-6 mb-4">
                    <a class="text-decoration-none link" href="<?php echo $page->permalink(); ?>">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:12px;">
                            <div class="img-hover-zoom" style="border-top-left-radius:12px;border-top-right-radius:12px;">
                                <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top crop" alt="<?php echo $page->title(); ?>" style="border-top-left-radius:12px;border-top-right-radius:12px;">
                            </div>
                            <div style="position:absolute;left:7px;top:8px;">
                                <span class="badge bg-dark text-light ms-2 mt-2 text fw-light p-2 "><?php echo $page->category() ?></span>
                            </div>
                            <div class="card-body">
                                <span style="font-size:12px;color:#b5b5b5;"><i class="far fa-clock"></i> <?php echo $page->date(); ?></span>
                                <p class="card-text pt-1" style="font-size:17px;"><?php echo $page->title(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>
                <!--/ Card Content -->
                <?php endif; ?>
            <h5 class="fw-bold pb-2 pt-2"><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('Dernièrement')) ?></h5>
                <!-- Card Content -->
                <?php if (empty($content)) { $language->p('No pages found'); } ?>
                <?php foreach ($content as $page): ?>
                <div class="col-md-4 mb-4">
                    <a class="text-decoration-none link" href="<?php echo $page->permalink(); ?>">
                        <div class="card border-0 shadow-sm h-100" style="border-radius:12px;">
                            <div class="img-hover-zoom" style="border-top-left-radius:12px;border-top-right-radius:12px;">
                                <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top crop" alt="<?php echo $page->title(); ?>" style="border-top-left-radius:12px;border-top-right-radius:12px;">
                            </div>
                            <div style="position:absolute;left:7px;top:8px;">
                                <span class="badge bg-dark text-light ms-2 mt-2 text fw-light p-2 "><?php echo $page->category() ?></span>
                            </div>
                            <div class="card-body">
                                <span style="font-size:12px;color:#b5b5b5;"><i class="far fa-clock"></i> <?php echo $page->date(); ?></span>
                                <p class="card-text pt-1" style="font-size:17px;"><?php echo $page->title(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>
                <!--/ Card Content -->
            </div>
        <!--/ Row -->
        <?php if (Paginator::numberOfPages()>1): ?>
        <?php if (Paginator::showPrev()): ?>
        <p class="text-center mt-2"><a class="btn border-0 text-light rounded-pill" href="<?php echo Paginator::previousPageUrl() ?>" role="button" style="background-color:#d90a8f;"><i class="fas fa-arrow-left"></i></a> 
        <?php endif ?>
        <?php if (Paginator::showNext()): ?>
        <a class="btn border-0 text-light rounded-pill" href="<?php echo Paginator::nextPageUrl() ?>" role="button" style="background-color:#d90a8f;"><i class="fas fa-arrow-right"></i></a></p>
        <?php endif ?>
        <?php endif ?>
        </div>
        <!--/ Col-9 -->
        <!-- Sidebar -->
        <?php include('sidebar.php'); ?>
        <!--/ Sidebar -->
    </div>
    <!--/ Row -->
</div>
<!--/ Container -->
<!--/ Content -->