<div class="container-fluid bg-light">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">Poste Populaire</h5>
                    <ul class="list-group list-group-flush">
                        <?php
                            $listOfKeys = $pages->getList(1, 8);
                            if ($listOfKeys) :
                            foreach ($listOfKeys as $key) :
                            $lPage = new Page($key);
                        ?>
                        <li class="list-group-item bg-light" style="padding-left:0px;"><a class="text-decoration-none" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
                        <?php endforeach ?>
                        <?php endif ?>
                    </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">Tags</h5>
                    <?php
                        $items = getTags();
                        foreach ($items as $tag) {
                        echo '<a class="badge bg-white text-dark p-2 mb-2 text-decoration-none me-1" href="'.$tag->permalink().'" style="font-size:11px;"><i class="fas fa-hashtag" style="color:#d90a8f;"></i> '.$tag->name().'</a>';
                        }
                    ?>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="mb-3"><?php echo $site->title(); ?></h5>
                    <div class="d-flex pb-3 pt-3">
                    <a class="btn me-2" href="https://gitlab.com/romain.cian" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-gitlab"></i></a>
                    <a class="btn me-2" href="https://github.com/FrenchPhalange" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-github"></i></a>
                    <a class="btn me-2" href="https://discord.gg/emav8UNQJf" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-discord"></i></a>
                        <!-- <a class="btn me-2 bg-white" href="#" role="button" style="color:#d90a8f;"><i class="fab fa-twitter"></i></a> -->
                    </div>
                    <p><?php echo $site->description(); ?></p>
                    <p class="pt-2">&copy; Copyright 2022 Fait par <strong> Heidegger </strong> avec ❤️️</p>
            </div>
        </div>
    </div>
</div>