<div class="col-md-3 mt-4">
    <div class="card shadow border-0 p-2 mb-4" style="border-radius:10px;">
        <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Articles Populaire</h5>
                <ul class="list-group list-group-flush">
                    <?php
                        $listOfKeys = $pages->getList(1, 10);
                        if ($listOfKeys) :
                        foreach ($listOfKeys as $key) :
                        $lPage = new Page($key);
                    ?>
                    <li class="list-group-item" style="padding-left:0px;"><a class="text-decoration-none" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
                    <?php endforeach ?>
                    <?php endif ?>
                </ul>
        </div>
    </div>
    <div class="card shadow border-0 p-2" style="border-radius:10px;">
        <div class="card-body" >
            <h5 class="card-title fw-bold mb-3">Catégories Populaire</h5>
                <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
            <a class="btn bg-light text-dark p-2 mb-2 text-decoration-none me-1" href="<?php echo DOMAIN_CATEGORIES.$key; ?>" role="button" ><?php echo $fields['name']; ?></a>
            <?php
              endif;
              endforeach; ?>
        </div>
    </div>
</div>