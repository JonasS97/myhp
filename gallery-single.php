<?php require_once('.\assets\layout\header.php');?>

    
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Vollständige Gallery</h1>
              <p class="mb-0">Hier finden Sie alle meine Projekte so wie Bilder.</p>
              
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Startseite</a></li>
            <li class="current">Vollständige Gallery</li>
          </ol>
        </div>
      </nav>
    </div>

    
    <section id="gallery-details" class="gallery-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-8.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-9.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-10.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-11.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-12.jpeg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/gallery-13.jpg" alt="">
            </div>

            <div class="swiper-slide">
              <img src="./assets/img/gallery/Urlaub1.jpg" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Das ist ein Beispiel meiner 3D-Drucke</h2>
              <p>
                Bei fragen oder anderen Anregungen können sie mich gerne über Kontakte kontaktieren
              </p>
              <p>
                Beispiel Text
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Beispiel Kunden Bewertung.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="./assets/img/gallery/wolf.jpg" class="testimonial-img" alt="">
                  <h3>Wolf</h3>
                  <h4>DerHeuler</h4>
                </div>
              </div>

              <p>
                Beispiel Text.
              </p>

              <p>
                Beispiel Text.
              </p>

            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Projekt Informationen</h3>
              <ul>
                <li><strong>Kategorie</strong> 3D Drucken</li>
                <li><strong>Entwickler</strong> JSPrivat</li>
                <li><strong>Projekt Datum</strong> 01 March, 2020</li>
                <li><strong>Project URL</strong> <a href="#">www.Beispiel.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Zur Webseite</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Gallery Details Section -->

  </main>

 

    <?php require_once('.\assets\layout\footer.php');?>