<?php require_once "header.php"; ?>

<header class="hero d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h1 class="display-4">Parc zoologique Arcadia</h1>
            <p class="lead">Nous sommes ravis de vous voir ici</p>
            <!--<a href="#about" class="btn btn-lg btn-light">En savoir plus</a>-->
        </div>
    </header>




<section class="page-section" id="services"> <!--bg-light-->
            <div class="container">
                <div class="text-center">

                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading">Heures d'ouvertures du parc : 9:00 à 18:00</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Restauration</h4>
                        <p class="">Plusieurs restaurants sont disponibles sur place pour voyager également pendant le repas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x "></i>
                            <i class="fas fa-train fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visite du parc</h4>
                        <p class="">Parcourez le tour du parc en petit train</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-eye fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visite guidée des habitats</h4>
                        <p class="">Laissez-vous guider par nos experts et profitez des animaux.</p>
                    </div>
                </div>
                    <div class="container text-center">
                        <a class="btn btn-warning btn-x1 text-uppercase btn-lg" data-bs-toggle="modal" href="#servicesModal1">plus</a>
                    </div>
            </div>
        </section>

        <!-- Portfolio Habitat-->
        <section class="page-section" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Habitat</h2>
                    <h3 class="section-subheading">Explorez les milieux naturels de nos animaux</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">


                        <!-- Portfolio savane -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/savane.jpg" alt="savane" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-uppercase text-muted">Savane</div>
                                <div class="portfolio-caption-subheading text-muted">Chaud et sec</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">


                        <!-- Portfolio jungle-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/jungle.jpg" alt="jungle" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-uppercase text-muted">Jungle</div>
                                <div class="portfolio-caption-subheading text-muted">Chaud et humide</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">


                        <!-- Portfolio marais-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/marais.jpg" alt="Marais" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading text-uppercase text-muted">Marais</div>
                                <div class="portfolio-caption-subheading text-muted ">Humide, vegetation aquatique dense</div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!--A propos-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-uppercase">A propos de nous</h2>
                    <h3 class="section-subheading">Notre histoire et nos convictions</h3>
                    <div class="row align-items-start">
                    <div class="col-sm">
                        <p>Bienvenue au Zoo Arcadia, une destination incontournable située en France, à proximité de la mythique forêt de Brocéliande en Bretagne. 
                            Fondé en 1960, le Zoo Arcadia est un lieu emblématique où la nature et la faune se rencontrent harmonieusement. 
                            Le zoo bénéficie d'un cadre naturel exceptionnel et héberge une diversité impressionnante d'animaux venus des quatre coins du monde
                            , organisés en fonction de leurs habitats naturels.
                            Le Zoo Arcadia offre une expérience enrichissante et mémorable à tous ceux qui franchissent ses portes.</p>
                    </div>
                    <div class="col-sm">
                        <img class="img-fluid" src="assets/img/flamant.jpg">
                    </div>
                    </div>

                </div>
            </div>
        </section>


<section>
<div class="container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item text-center active">
      <div class="commentaires">
      "Ma visite au Zoo Arcadia a été une expérience absolument inoubliable ! Situé près de la forêt de Brocéliande, ce zoo est un véritable havre de paix pour les animaux."
    </div>
    </div>
    <div class="carousel-item text-center">
      <div class="commentaires">
      "C'est un endroit parfait pour une sortie en famille, et je recommande vivement de le visiter si vous êtes en Bretagne. Bravo au Zoo Arcadia pour son excellent travail !"
    </div>
    </div>
    <div class="carousel-item text-center">
      <div class="commentaires">
      "Visite fantastique au Zoo Arcadia ! Superbe diversité d'animaux, habitats bien recréés et personnel attentionné. Parfait pour une sortie en famille. Je recommande vivement !"
    </div>
    </div>
  </div>
 
</div>
</div>
</section>


        <?php require_once "footer.php" ?>
