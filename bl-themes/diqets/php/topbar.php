<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow py-2">
  <div class="container">
    <a class="navbar-brand fw-bold fs-2" href="<?php echo $site->url(); ?>"><?php echo $site->title(); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a>
        </li>
        <?php
        endif;
        endforeach; ?>
      </ul>
      <div class="d-flex">
        <a class="btn me-2" href="https://gitlab.com/romain.cian" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-gitlab"></i></a>
        <a class="btn me-2" href="https://github.com/FrenchPhalange" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-github"></i></a>
        <a class="btn me-2" href="https://discord.gg/emav8UNQJf" target="_blank" role="button" style="color:#d90a8f;"><i class="fab fa-discord"></i></a>

        <!-- <a class="btn me-2" href="#" role="button" style="color:#d90a8f;"><i class="fab fa-twitter"></i></a> -->
      </div>
    </div>
  </div>
</nav>
<!--/ Nav -->