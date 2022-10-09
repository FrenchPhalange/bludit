<!-- Container -->
<div class="container mt-3 mb-5">
    <!-- Row -->
    <div class="row">
        <div class="col-md-9">
            <div class="row mt-4">
                <!-- Card Content -->
                <div class="col-md-12 mb-4">
                    <?php Theme::plugins('pageBegin'); ?>
                    <div class="card border-0 shadow-sm h-100" style="border-radius:12px;">
                        <?php if ($page->coverImage()): ?>
                        <img src="<?php echo $page->coverImage(); ?>" class="img-fluid" alt="<?php echo $page->title(); ?>" style="border-top-left-radius:12px;border-top-right-radius:12px;">
                        <?php endif ?>
                            <div class="card-body">
                                <span class="badge text-light mt-2 text fw-light p-2" style="background-color:#d90a8f;"><?php echo $page->category() ?></span> &nbsp;<span style="font-size:12px;color:#b5b5b5;"><i class="far fa-clock"></i> <?php echo $page->date(); ?></span>
                                <h1 class="card-text pt-3"><?php echo $page->title(); ?></h1>
                            </div>
                            <div class="card-body offset-md-1 fs-6 text p-4 ">
                                <?php echo $page->content(); ?>
                                <br>
                                <?php if (!empty($page->tags(true))): ?>
                              <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                              <a class="btn btn-light btn-sm mb-2" href="<?php echo DOMAIN_TAGS.$tagKey ?>" role="button"><i class="fas fa-hashtag" style="color:#d90a8f;"></i> <?php echo $tagName; ?></a> &nbsp;
                              <?php endforeach ?>
                              <?php endif; ?>
                              <br><br>
                            </div>
                    </div>
                    <?php Theme::plugins('pageEnd'); ?>
                </div>
                <!--/ Card Content -->
            </div>
        <!--/ Row -->
        </div>
        <!--/ Col-9 -->
        <!-- Sidebar -->
        <?php include('sidebar.php'); ?>
        <!--/ Sidebar -->
    </div>
    <!--/ Row -->
</div>
<!--/ Container -->
