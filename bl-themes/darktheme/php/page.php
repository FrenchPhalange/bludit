<?php Theme::plugins('pageBegin'); ?>
    <!-- full page -->
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-12">
                <?php if ($page->coverImage()): ?>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid rounded" alt="<?php echo $page->title(); ?>">
                <small><span class="text-secondary"><?php echo $page->custom('figure'); ?></span></small>
                <?php endif ?>
                <h1 class="fw-bold text-white pt-4 pb-5"><?php echo $page->title(); ?></h1>
            </div>
            
            <div class="col-sm-3 text-secondary pb-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item bg-dark text-secondary border-secondary text-white pb-3" style="padding-left:2px;"><img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="mdo" width="45" height="45" class="rounded-circle">&nbsp; <?php echo $page->user('nickname'); ?></li>
                  <li class="list-group-item bg-dark text-secondary border-secondary"><i class="far fa-folder text-warning"></i>&nbsp; <?php echo $page->category() ?></li>
                  <li class="list-group-item bg-dark text-secondary border-secondary"><i class="far fa-clock text-warning"></i>&nbsp; <?php echo $page->date(); ?></li>
                </ul>
            </div>
            
            <div class="col-sm-9">
                <p class="text-secondary"><?php echo $page->content(); ?></p>
                <?php if (!empty($page->tags(true))): ?>
                <p class="pt-3">
                    <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                    <a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span class="badge rounded-pill bg-warning text-dark"><?php echo $tagName; ?></span></a>
                    <?php endforeach ?>
                </p>
                <?php endif; ?>
                <br>
                 <?php Theme::plugins('pageEnd'); ?>
            </div>
            
        </div>
    </div>
    <!--/ full page -->