<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Boutique ISI</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/25933c88a8.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <button class="burger-btn">
    <div class="burger-btn__box">
      <div class="burger-btn__bars"></div>
    </div>
  </button>
  <nav class="nav">
    <div class="nav__items">
      <a href="#location" class="nav__item">Localisation</a>
      <a href="#offers" class="nav__item">Offres</a>
      <a href="#reviews" class="nav__item">Avis</a>
      <a href="#contact" class="nav__item">Contact</a>
    </div>
  </nav>
  <header class="header section">
    <h1 class="header__heading"><a href="#">Boutique ISI</a></h1>
    <p class="header__text">Vêtements pour femmes, hommes et enfants</p>
    <a href="#offers" class="header__btn btn-special-animation">Découvrez l'offre</a>
    <?php if(isset($_SESSION["email"])){?>
	<a class="header__btn btn-special-animation"><?php echo $_SESSION['email']; ?></a> <?php } 
	else echo '<a href="login.html" class="header__btn btn-special-animation">Se connecter</a>'; ?>
    <div class="white-block white-block-left"></div>
  </header>
  <main class="main">
    <section class="for-who section-padding section white-section">
      <div class="wrapper">
        <div class="for-who__box">
          <div class="for-who__box-img">
            <img src="./img/woman-small.jpg"  class="for-who__img">
            <img src="./img/woman-big.jpg"  class="for-who__img2">
            <a href="#woman" class="for-who__box-btn btn-special-animation">Femme</a>
          </div>
          <div class="for-who__box-text">
            <h3 class="for-who__title"></h3>
          </div>
        </div>
        <div class="for-who__box">
          <div class="for-who__box-img">
            <img src="./img/man2.jpg" 
              class="for-who__img">
            <img src="./img/man2.jpg" 
              class="for-who__img2">
            <a href="#man" class="for-who__box-btn btn-special-animation">Homme</a>
          </div>
          <div class="for-who__box-text">
            <h3 class="for-who__title"></h3>
          </div>
        </div>
        <div class="for-who__box">
          <div class="for-who__box-img">
            <img src="./img/baby-small.jpg"  class="for-who__img">
            <img src="./img/baby-big.jpg"  class="for-who__img2">
            <a href="#baby" class="for-who__box-btn btn-special-animation">Enfant</a>
          </div>
          <div class="for-who__box-text">
            <h3 class="for-who__title"></h3>
          </div>
        </div>
      </div>
    </section>
    <section class="hero-img section">
      <div class="white-block white-block-left"></div>
      <div class="white-block white-block-right"></div>
      <p class="hero-img__title">Boutique ISI</p>
      <hr>
      <p class="hero-img__text">Large assortiment - Vêtements pour femmes, hommes et enfants</p>
      <hr>
    </section>
    <section class="products section-padding section white-section" id="products">
      <div class="wrapper">
        <h2 id="woman" class="section-heading">Femme</h2>
        <div class="products__cards">
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--first-woman">
              <h3 class="products__card-img-title">Vestes</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info">
              <h3 class="products__card-info-title">Vestes</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Vestes d'hiver et de printemps</li>
                <li class="products__card-info-list-item">Bombardiers</li>
                <li class="products__card-info-list-item">Coupe-vent</li>
                <li class="products__card-info-list-item">Existe aussi en grande taille</li>
                <li class="products__card-info-list-item">Les derniers modèles</li>
                <li class="products__card-info-list-item">Coupes classiques</li>
              </ul>
            </div>
          </div>
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--second-woman">
              <h3 class="products__card-img-title">Robes</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info">
              <h3 class="products__card-info-title">Robes</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Robes d'été et de soirée</li>
                <li class="products__card-info-list-item">Tuniques</li>
                <li class="products__card-info-list-item">Jupes</li>
                <li class="products__card-info-list-item">Existe aussi en grande taille</li>
                <li class="products__card-info-list-item">Les derniers modèles</li>
                <li class="products__card-info-list-item">Coupes classiques</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper column">
        <h2 id="man" class="section-heading">Homme</h2>
        <div class="products__cards">
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--first-man">
              <h3 class="products__card-img-title">Chemises</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info products__card-info-man">
              <h3 class="products__card-info-title">Chemises</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Chemises de visite et en lin</li>
                <li class="products__card-info-list-item">Lisse et quadrillé</li>
                <li class="products__card-info-list-item">Motifs tendance</li>
                <li class="products__card-info-list-item">Coupes slim fit et regular fit</li>
                <li class="products__card-info-list-item">Large gamme de tailles</li>
              </ul>
            </div>
          </div>
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--second-man">
              <h3 class="products__card-img-title">Chandails</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info products__card-info-man">
              <h3 class="products__card-info-title">Chandails</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Pulls unis et à motifs</li>
                <li class="products__card-info-list-item">Coupes slim fit et regular fit</li>
                <li class="products__card-info-list-item">Existe aussi en grande taille</li>
                <li class="products__card-info-list-item">Les derniers modèles</li>
                <li class="products__card-info-list-item">Coupes classiques</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper column">
        <h2 id="baby" class="section-heading">Enfant</h2>
        <div class="products__cards">
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--first-baby">
              <h3 class="products__card-img-title">Combinaisons</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info ">
              <h3 class="products__card-info-title">Combinaisons</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Salopettes garçons et filles</li>
                <li class="products__card-info-list-item">Chaud et d'été</li>
                <li class="products__card-info-list-item">Pour les bébés</li>
                <li class="products__card-info-list-item">Un large choix de couleurs</li>
                <li class="products__card-info-list-item">Large gamme de tailles</li>
              </ul>
            </div>
          </div>
          <div class="products__card" onclick="void(0)">
            <div class="products__card-img products__card-img--second-baby">
              <h3 class="products__card-img-title">Casquettes</h3>
              <div class="products__card-img-info-box">
                <p class="products__card-img-info"><i class="fas fa-angle-double-right"></i>Montre moi les détails</p>
              </div>
            </div>
            <div class="products__card-info">
              <h3 class="products__card-info-title">Casquettes</h3>
              <ul class="products__card-info-list">
                <li class="products__card-info-list-item">Chapeaux d'hiver</li>
                <li class="products__card-info-list-item">L'été avec une visière</li>
                <li class="products__card-info-list-item">Gants</li>
                <li class="products__card-info-list-item">Écharpes</li>
                <li class="products__card-info-list-item">Un large choix de couleurs</li>
                <li class="products__card-info-list-item">Large gamme de tailles</li>

              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- OFFERS -->
    <section class="offers section-padding section" id="offers">
      <div class="white-block white-block-right"></div>
      <div class="white-block white-block-left"></div>
      <h2 class="section-heading">Offres</h2>
      <div class="wrapper">
        <div class="offers__box">

          <div class="offers__option">
            <img src="./img/offer/women1.jpg"
              class="offers__option-img">
            <div class="offers__option-info">
              <h3 class="offers__option-heading">Pour femme</h3>
              <p class="offers__option-text">Une large gamme de vêtements de la meilleure qualité des deux producteurs de l'isi
                ainsi que les importations. L'offre comprend :</p>
              <ul class="offers__option-list">
                <li class="offers__option-list-item"><p>Manteaux d'hiver</p><p>à partir de 199 dt</p></li>
                <li class="offers__option-list-item"><p>Vestes de printemps</p><p>à partir de 149 dt</p> </li>
                <li class="offers__option-list-item"><p>Robes de soirée</p><p>à partir de 99 dt</p></li>
                <li class="offers__option-list-item"><p>Echarpes et bonnets</p><p>à partir de 29 dt</p></li>
                <li class="offers__option-list-item"><p>Chemisiers</p><p>à partir de 49 dt</p></li>
                <li class="offers__option-list-item"><p>Pantalon</p><p>à partir de 79 dt</p></li>
                <li class="offers__option-list-item">Beaucoup d'autres...</li>
              </ul>
            </div>
          </div>



          <div class="offers__option">
            <img src="./img/offer/men3.jpg"
              class="offers__option-img offers__option-img--right">
            <div class="offers__option-info">
              <h3 class="offers__option-heading">Pour hommes</h3>
              <p class="offers__option-text">Une large gamme de vêtements de la meilleure qualité des deux producteurs polonais
                ainsi que les importations. L'offre comprend :</p>
              <ul class="offers__option-list">
                <li class="offers__option-list-item"><p>Manteaux d'hiver</p> <p>à partir de 199 dt</p></li>
                <li class="offers__option-list-item"><p>Vestes de printemps</p><p>à partir de 149 dt</p> </li>
                <li class="offers__option-list-item"><p>Pull</p><p>à partir de 99 dt</p></li>
                <li class="offers__option-list-item"><p>Echarpes et bonnets</p><p>à partir de 29 dt</p></li>
                <li class="offers__option-list-item"><p>Chemises</p><p>à partir de 49 dt</p></li>
                <li class="offers__option-list-item"><p>Pantalon</p><p>à partir de 79 dt</p></li>
                <li class="offers__option-list-item">Beaucoup d'autres...</li>
              </ul>
            </div>
          </div>
          <div class="offers__option">
            <img src="./img/offer/kids4.jpg" class="offers__option-img">
            <div class="offers__option-info">
              <h3 class="offers__option-heading">Pour les enfants</h3>
              <p class="offers__option-text">Une large gamme de vêtements de la meilleure qualité des deux producteurs polonais
                ainsi que les importations. L'offre comprend :</p>
              <ul class="offers__option-list">
                <li class="offers__option-list-item"><p>Manteaux d'hiver</p> <p>à partir de 199 dt</p></li>
                <li class="offers__option-list-item"><p>Vestes de printemps</p><p>à partir de 149 dt</p> </li>
                <li class="offers__option-list-item"><p>Robes de soirée</p><p>à partir de 99 dt</p></li>
                <li class="offers__option-list-item"><p>Echarpes et bonnets</p><p>à partir de 29 dt</p></li>
                <li class="offers__option-list-item"><p>Chemisiers</p><p>à partir de 49 dt</p></li>
                <li class="offers__option-list-item"><p>Pantalon</p><p>à partir de 79 dt</p></li>
                <li class="offers__option-list-item">Beaucoup d'autres...</li>
              </ul>
            </div>
          </div>

          <div class="offers__option">
            <img src="./img/offer/plus-size2.png"
              class="offers__option-img offers__option-img--right">
            <div class="offers__option-info">
              <h3 class="offers__option-heading">Grande taille</h3>
              <p class="offers__option-text">Une large gamme de vêtements de la meilleure qualité des deux producteurs polonais
                ainsi que les importations. L'offre comprend :</p>
              <ul class="offers__option-list">
                <li class="offers__option-list-item"><p>Manteaux d'hiver</p> <p>à partir de 199 dt</p></li>
                <li class="offers__option-list-item"><p>Vestes de printemps</p><p>à partir de 149 dt</p> </li>
                <li class="offers__option-list-item"><p>Robes de soirée</p><p>à partir de 99 dt</p></li>
                <li class="offers__option-list-item"><p>Echarpes et bonnets</p><p>à partir de 29 dt</p></li>
                <li class="offers__option-list-item"><p>Chemisiers</p><p>à partir de 49 dt</p></li>
                <li class="offers__option-list-item"><p>Pantalon</p><p>à partir de 79 dt</p></li>
                <li class="offers__option-list-item">Beaucoup d'autres...</li>
              </ul>
            </div>
          </div>
          <div class="offers__footer">
            <p>En plus d'une large gamme de produits, nous proposons également des services de couture afin d'adapter au mieux les vêtements à
              profils et préférences de nos clients !
            <p>Demandez des détails <a href="#contact" class="offers__footer-link">par téléphone</a> ou en magasin.</p>
            </p>
          </div>
        </div>
    </section>

    <section class="location section-padding">
      <div class="wrapper">
        <h2 id="location" class="section-heading">Emplacement</h2>
        <div class="location__boxes">
          <div class="location__map" id="map">  <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/search/Ariana+()/@37.308906,10.178568,8z?hl=en"></iframe></div>
          <div class="location__info">
            <div class="location__contact">
              <h3 class="location__title">où pouvez-vous nous trouver</h3>
              <p><i class="fas fa-map-marker-alt"></i> Boutique ISI </p>
              <p> 2 Rue Abou Raihane Bayrouni 2080 l'Ariana</p>
              <p><i class="fas fa-phone-alt"></i>(216) 71 706 164</p>
            </div>
            <div class="location__newsletter">
              <h3 class="location__title">Voulez-vous être à jour?</h3>
              <p>Abonnez-vous à la newsletter!</p>
              <div class="location__newsletter-box"><input class="location__newsletter-email" type="email"
                  placeholder="entrer l'adresse e-mail...">
                <button onClick="window.location.reload()" class="location__newsletter-btn btn-special-animation">S'inscrire</button>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="reviews section-padding section white-section" id="reviews">
      <h2 class="section-heading">Avis</h2>
      <div class="wrapper">
        <div class="reviews__boxes">

          <div class="reviews__box">
            <div class="reviews__box-img">
              <img src="./img/reviews/review1.jpg">
            </div>
            <div class="reviews__box-info">
              <div class="reviews__box-quote"><i class="fas fa-quote-right"></i> </div>
              <p class="reviews__box-text">Vêtements au top! Livraison assez rapide et gratuite au desu d'un certain montant.</p>
              <strong>Kawther Ben Salah</strong>
            </div>
          </div>

          <div class="reviews__box">
            <div class="reviews__box-img">
              <img src="./img/reviews/review44.jpg" alt="Anna Nowak">
            </div>
            <div class="reviews__box-info">
              <div class="reviews__box-quote"><i class="fas fa-quote-right"></i> </div>
              <p class="reviews__box-text">Super qualités tres belles collection.</p>
              <strong>Nour El Ain</strong>
            </div>

          </div>

          <div class="reviews__box">
            <div class="reviews__box-img">
              <img src="./img/reviews/review3.jpg" alt="Agnieszka Wiśniewska">
            </div>
            <div class="reviews__box-info">
              <div class="reviews__box-quote"><i class="fas fa-quote-right"></i> </div>
              <p class="reviews__box-text">Choix varié de livraison très pratique selon le budget.</p>
              <strong>Youssef Takali</strong>
            </div>
          </div>
        </div>
    </section>

    <section id="contact" class="contact section-padding section white-section">
      <div class="white-block white-block-left"></div>
      <div class="white-block white-block-right"></div>
      <h2 class="section-heading">Contact</h2>
      <div class="wrapper">
        <div class="contact__general-boxes">
          <div class="contact__general-box">
            <p>ISI Ariana</p>
            <p><i class="fas fa-phone-alt"></i> +216 71 706 164</p>
            <p><i class="far fa-envelope"></i>  isi@ isi.utm.tn</p>
            <p>Merci de nous contacter via Messenger</p>
            <a target="_blank"><i class="fab fa-facebook-messenger"></i></a>
          </div>
          <div class="contact__general-box contact__desktop">
            <p>Boutique ISI</p>
            <p>C.H. Théophile</p>
            <p>2 Rue Abou Raihane Bayrouni</p>
            <p>2080 l'Ariana</p>
            <p>Veuillez visiter notre Facebook</p>
            <a target="_blank"><i class="fab fa-facebook-square"></i></a>
          </div>
        </div>
        <h3 class="section-heading">Formulaire de contact</h3>
        <form class="contact__form">
          <div class="contact__form-top">
            <label for="name" class="contact__form-label">Prénom et nom:</label>
            <input name="name" type="text" class="contact__form-input" id="name">
            <label for="email" class="contact__form-label">Adresse e-mail:</label>
            <input name="mail" type="text" class="contact__form-input" id="email">
          </div>
          <label for="" class="contact__form-label">Contenu:</label>
          <textarea name="content" minlength="10" maxlength="500" id="msg" class="contact__form-textarea"></textarea>
          <button type="submit" class="contact__form-btn btn-special-animation"> Envoyer</button>
        </form>
<?php
	if (isset($_POST['mail'])) $mail=$_POST['mail'];
	if (isset($_POST['name'])) $name=$_POST['name'];
	if (isset($_POST['content'])) $content=$_POST['content'];
		req=mysql_query("insert into contact value('$name','$mail','$content');");
?>
      </div>
    </section>

  </main>
  <footer class="footer">
    <div class="wrapper">
      <div class="footer__boxes">
        <div class="footer__box">
          <h3 class="footer__box-title"> Description</h3>
          <p>Nous sommes une entreprise familiale qui opère sur le marché depuis plus de 20 ans. Pendant tout ce temps, nous veillons à assurer
            Nous vous offrons les meilleurs produits de qualité, en équilibrant les classiques avec les dernières tendances de la mode.</p>
          <div class="footer__box-social">
            <a target="_blank" class="footer__box-link"><i class="fab fa-twitter-square"></i></a>
            <a target="_blank" class="footer__box-link"><i
                class="fab fa-facebook-square"></i></a>
            <a target="_blank" class="footer__box-link"><i class="fab fa-instagram"></i></a>
          </div>
        </div>


        <div class="footer__box footer__box-desktop">
          <h3 class="footer__box-title">POURQUOI NOUS?</h3>
          <ul class="footer__box-list">
            <li class="footer__box-list-item">Plus de 20 ans sur le marché</li>
            <li class="footer__box-list-item">Les styles les plus en vogue</li>
            <li class="footer__box-list-item">Grande qualité des produits</li>
            <li class="footer__box-list-item">Coupes classiques</li>
          </ul>
        </div>
        <div class="footer__box footer__box-desktop">
          <h3 class="footer__box-title">À propos de la société</h3>
          <ul class="footer__box-list">
            <li class="footer__box-list-item">Boutique ISI</li>
            <li class="footer__box-list-item">2 Rue Abou Raihane Bayrouni</li>
            <li class="footer__box-list-item">2080 l'Ariana</li>
            <li class="footer__box-list-item">PIN 123456789</li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <p class="footer__bottom-text">Boutique ISI &copy; <span class="footer__year"></span></p>
  </footer>



  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="./js/slick.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>