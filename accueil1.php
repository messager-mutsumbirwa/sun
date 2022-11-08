<?php include "entete.php"  ?>
<!--/ Header end -->

<div class="banner-carousel banner-carousel-2 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title">5 ans d' Excelence dans </h2>
              <h3 class="box-slide-sub-title"> Votre maison, notre passion</h3>
              <p class="box-slide-description">Créer des communautés grâce à des services de conception, de construction et de gestion.</p>
              <p>
                <a href="services.html" class="slider btn btn-primary">Our Service</a>
              </p>
          </div>
        </div>
    </div>
  </div>

   <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title"><h1>5 ans d' Excelence dans </h2>
              <h3 class="box-slide-sub-title">Creating spaces that inspire you to be yourself</h3>
              <p class="box-slide-description">Notre équipe se construit depuis des générations, vous pouvez donc être assuré que nous savons ce que nous faisons.</p>
              <p>
                <a href="services.html" class="slider btn btn-primary">Our Service</a>
              </p>
          </div>
        </div>
    </div>
  </div>
   <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title">5 ans d' Excelence dans </h2>
              <h3 class="box-slide-sub-title">Des maisons personnalisées avec une touche personnelle</h3>
              <p class="box-slide-description">En tant que cabinet d'architecture primé, nous avons conçu de nombreux beaux bâtiments à travers le monde.</p>
              <p>
                <a href="services.html" class="slider btn btn-primary">Our Service</a>
              </p>
          </div>
        </div>
    </div>
  </div>

   <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg6.jpg)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title">5 ans d' Excelence dans </h2>
              <h3 class="box-slide-sub-title">Votre vision, notre expertise</h3>
              <p class="box-slide-description">Aider les marques à être courageusement différentes en concevant de manière imaginative leur avenir, pas seulement leurs produits..</p>
              <p>
                <a href="services.html" class="slider btn btn-primary">Our Service</a>
              </p>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg4.jpg)">
    <div class="slider-content text-left">
        <div class="container">
          <div class="box-slider-content">
              <div class="box-slider-text">
                <h2 class="box-slide-title">When Services Matters</h2>
                <h3 class="box-slide-sub-title">Your Choice is Simple</h3>
                <p class="box-slide-description">Découvrez ce que les autres ne peuvent pas imaginer, afin que vous puissiez faire ce que les autres ne peuvent pas comprendre..</p>
                <p><a href="about.html" class="slider btn btn-primary" aria-label="about-us">Know Us</a></p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs on construction</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="contact.html">Request Quote</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
      
      <div class="container-site">
      <?php
        require 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
        require 'file:///C:/xampp/htdocs/sun/Admin/modele/index.php';
        require 'file:///C:/xampp/htdocs/sun/controleur/index2.php';
        while ($donnees = $reponse->fetch())
          {
            
       echo'<div class="container-item">
            <form action="../sun/produit2.php" method="POST">
              <input type="hidden" name="id" value="'.$donnees['id_fournisseur'].'">
              <div class="item-title">'.$donnees['nameitem'].'</div>  
              <div class="item-img">
                <input type="image"  src="../sun/img/'.$donnees['image'].'"">
              </div>
            </form>
            <form action="'.htmlspecialchars($donnees['catitem']).'2.php" method="POST">
              <div class="seemore">
                <input type="submit" name="catitem" value="Voir plus" >
              </div>
            </form>
            
          </div>
          ';}?>
          
    </div>

</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->


<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">DESIGN INTERIEUR</a></h3>
                <p>Nous combinons des décennies d`expérience dans la conception des projets avec un dévouement sans relâche à établir des nouvelles références dans l`éclairage.</p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">AMENAGEMENT EXTERIEUR</a></h3>
                <p>Entreprendre des travaux d’aménagement paysager ou rafraîchir l’espace extérieur autour de votre propriété n’est pas une décision à prendre à la légère. Un tel projet représente souvent des milliers de dollars en investissement. Cependant, si le tout est bien fait, chaque dollar investi sera récupéré dans la valeur ajoutée à votre maison, en plus d’y retrouver un espace extérieur dont vous aimerez profiter tous les jours.</p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">REALISATION DE PLAN ARCHITECTURAL</a></h3>
                <p>Une maison doit être dessinée pour être construite, et ce sont ces plans qui définiront les dimensions et définitions de proportions architecturales. Les différents plans, dessins et coupes… forment l’ensemble collectivement nommé les plans d’architecte. Les plans d’architecte permettent de représenter graphiquement et techniquement un bâtiment et prenne aussi en compte les besoins et désirs du maître d’ouvrage (le client), afin de mettre en évidence les caractéristiques du projet. Le plan dépendra aussi de votre mode de vie. Les membres…</p>
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="images/services/bg5.jpg" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">CONCEPTION</a></h3>
                <p>La conception de bâtiment et le processus de documentation sont couverts pendant toutes les étapes du projet. En allant de la conception et la documentation et à la coordination et la construction. Nous nous spécialisons dans la conception de bâtiments adaptés aux objectifs de nos clients ainsi qu’aux besoins et au bien-être des occupants. En plus on accorde une attention particulière à la réduction de leur incidence sur l’environnement.</p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">AMENAGEMENT PAYSAGER</a></h3>
                <p>Nous vivons tous une vie bien remplie donnant du temps aux amis de la famille et au travail, donc notre chambre est souvent l`endroit où nous allons nous détendre et échapper aux cutters de la quotidienne.</p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">GESTION ET SUIVI DE CHANTIERS</a></h3>
                <p>Assurer le suivi de son chantier est une tâche complexe qui nécessite une bonne organisation. Il faut penser à tout, de l’organisation des travaux à l’impact que peut avoir son chantier sur l’environnement.<br>Une fois le contrat signé avec le constructeur et le prêt amorcé, les travaux de votre maison peuvent démarrer. Cependant, en sus des précautions prises en amont, il est important de suivre attentivement le chantier pour éviter tout incident.</p>
              </div>
          </div><!-- Service 6 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->


<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                      subline of her own road.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Gabriel Denis</h3>
                          <span class="quote-subtext">Chairman, OKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi aliquip consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Weldon Cash</h3>
                          <span class="quote-subtext">CFO, First Choice</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                      nisi ut commodo consequat.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Minter Puchan</h3>
                          <span class="quote-subtext">Director, AKT</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->

          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 3 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 4 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 5 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 6 end -->

          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+9) 847-291-4353</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-md-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Work of Excellence</h2>
          <h3 class="section-sub-title">Recent Projects</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
          	 <?php
        require 'file:///C:/xampp/htdocs/sun/Admin/modele/connect_bd.php';
        require 'file:///C:/xampp/htdocs/sun/Admin/modele/index.php';
        require 'file:///C:/xampp/htdocs/sun/controleur/index2.php';
        while ($donnees = $reponse->fetch())
          {

      
            
       echo'


              <div class="latest-post-media">
               <input type="hidden" name="id" value="'.$donnees['id_fournisseur'].'">
                <a href="news-single.html" class="latest-post-img">
                
                      <a><img type="image" class="img-fluid" loading="lazy" alt="img" src="../sun/img/'.$donnees['image'].'"></a>
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
               <a href="#" class="d-inline-block">'.$donnees['nameitem'].'</a>
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div>
               ';}?>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
    </div>
    

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->

 <?php include "footer.php" ?>  </body>

  </html>

  <style type="text/css">

    *, *::before, *::after {
    box-sizing: border-box;
    text-decoration: none;
}
    input[type='image']:hover{
  filter: brightnss(80%);
  transition: 1s;
}
.produit-imgprincipal img, .produit-imgprincipal input[type="image"]{
  width: 100%;
}

.mag-item-img input[type="image"]{
    width: 70%;
    padding-bottom: 10px;
  }

.container-item input{
  width: 100%;
}
.seemore input{
  color: #817ce7;
  background: rgb(194,97,0);
  border: 0;
  cursor: pointer;
}
.seemore::after{
  content: ' '; 
  float: right;
  
  height: 10px;
  width: 10px;
  position: absolute;
  margin-top: 5px;
  background: rgb(194,97,0);
}
.mag-sidebar-item-defils input[type='image']{
  flex-wrap: wrap;
  margin-right: 5px;
  height: 160px;
}
.mag-item-img input[type="image"]{
  width: 100%;
  height: auto;
}

.mag-item-text{
  width: 55%;
  display: inline-block;
  height: 0;
  flex-wrap: wrap;
  font-size: 16px;
  font-family: Arial;
  margin-left: 10px;
}

.mag-item-comment, .mag-vendeur, .mag-item-title, .mag-item-price{
  width: 100%;
}

.mag-item-comment{  
  color: rgba(0,0,0,.9);
}

.mag-item-title{
  color: rgba(0,0,0,.8);
}

.mag-item-title input{
  word-wrap: break-word;
  white-space: normal;
  text-align: left;
  font-family: inherit;
  border: 0;
  background: 0;
  padding: 0;
  font-size: inherit;
  color: #817ce7;
  text-decoration: underline;
  cursor: pointer;
}

.mag-item-price{
  color: #000;
}

.produit-container{
  background: white;
  padding: 10px 20px;
  font-size: 16px;
}

.produit-infos{
  color: #000;
  font-weight: bold;
}

.produit-infos a{
  color: #817ce7;
  font-weight: normal;
}

.produit-imgprincipal{
  margin-top: 5px;
}

.produit-imgprincipal img, .produit-imgprincipal input[type="image"]{
  width: 100%;
}

.produit-commentaire{
  color: rgba(0,0,0,.8);
}

.produit-prix{
  font-size: 16px;
  font-weight: bold;
}

.btcommander{
  text-align: center;
  background: rgb(255,167,43);
  padding: 5px 20px;
  margin-top: 10px;
  clear: both;
  margin: auto;
  color: white;
  cursor: pointer;
}

.btcommander input{
  background: 0;
  border: 0;
  font-size: inherit;color: inherit;
  font-family: inherit;
  cursor: pointer;
}

.sidebar-produit{
  background: white;
  margin-top: 2px;
  padding: 0 20px;
}

.sidebar-produit h2{
  padding-top: 5px;
  margin-top: 0;
}
.produit-img img{
  width: 100%;
}

/*Concernant la page listemagsins.php*/
.topbar-magsin{
  height: 165px;
  background: no-repeat center / cover url('../img/poulet.jpg') ;
  color: white;
  text-align: center;
  padding: 50px 5px;
  font-size: 20px;
}
.body-listemagsins{
  padding: 10px 20px;
}
.item-magsin{
  background: white;
  display: inline-block;
  width: calc(50% - 2px);
  height: auto;
  padding: 10px;
  border-radius: 5px 5px 0px 0px;
  margin-top: 10px;
}
.magsin-name{
  border-bottom: 4px solid rgb(255,167,43);
  text-align: center;
  width: 100%;
  color: #000;
  font-weight: bold;
}
.magsin-commentaire{
  line-height: 20px;
}
.magsin-img{
  width: 100%;
}
.magsin-img img{
  width: 10%;
}
.btexplore-magsin{
  text-align: center;
  color: blue;
}
.item-title, .magexpl-title{
  font-size: 25px;
  padding: 15px 0;
  color: white; 
}

.container-item img{
  width: 100%;
  height: auto;
}

.container-magexpl img{
  width: 100%;
  height: auto;
}

.seemore{
  padding: 10px 0;
  cursor: pointer;
}

.seemore input{
  color: white;
  background: rgb(197,97,0);
  border: 0;
  cursor: pointer;
}

.seemore::after{
  content: ' '; 
  float: right;
  background: no-repeat center center / cover url('../sun/images/arrowmore.png');
  height: 10px;
  width: 10px;
  position: absolute;
  margin-top: 5px;
}
.container-item input{
  width: 100%;
  border: 1px;
}
.container-item{
    width: calc(50% - 2px);
    display: inline-block;
  }

.container-item{
    width: calc(25% - 25px);
    margin-left: 15px;
  }
.container-item, .container-magexpl{
  background: black;
  margin: 5px 0px;
  padding: 5px 10px;
}
.container-site{
  background-image: url("../sun/images/Logo.jpg");
  background-repeat: repeat;
  background-attachment: fixed;
  background-position: center;

}

  </style>