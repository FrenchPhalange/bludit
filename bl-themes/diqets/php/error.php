<!-- Container -->
<div class="container mt-3 mb-5">
    <!-- Row -->
    <div class="row">
        <div class="col-md-9">
            <div class="row mt-4">
                <!-- Card Content -->
                <div class="col-md-12 mb-4">
                    <?php Theme::plugins('pageBegin'); ?>
                    <div class="card border-0 shadow-sm" style="border-radius:12px;">
                            <div class="card-body">
                                <?php echo $page->content(); ?>
                            </div>
                            <div class="card-body offset-md-1 fs-6 text p-4 ">
                            <?php Theme::plugins('pageEnd'); ?>
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
