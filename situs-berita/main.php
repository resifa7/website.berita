<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Welcome</h1>
      <p class="lead my-3">All the news is here.</p>
     
    </div>
  </div>

  <div class="row mb-2">
    <?php 
        if ($articles) {
            foreach ($articles as $article) {
                ?>
                 <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        
                        <h3 class="mb-0"><?php echo  $article['judul'] ?></h3>
                        <div class="mb-1 text-body-secondary">New Article</div>
                        <p class="card-text mb-auto"><?php echo $article['deskripsi'] ?></p>
                        <a href="/situs-berita/detail.php?id=<?php echo $article['id'] ?>" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                        </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                           <img src="/situs-berita/uploads/<?php echo $article['gambarr'] ?>" width="150" />
                        </div>
                    </div>
                </div>
                <?php
            }
        }
    ?> 

</main>