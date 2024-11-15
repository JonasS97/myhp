<?php require_once('.\assets\layout\header.php');?>

    
<div class="page-title" data-aos="fade">
    <!-- Abschnitt für den Titel der Seite, der mit einem sanften Fade-Effekt erscheint -->
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Über mich</h1>
                    <!-- Überschrift der Seite, die den Benutzern sagt, dass es sich um den "Über mich"-Abschnitt handelt -->
                    <p class="mb-0">Im folgenden möchte ich euch etwas über meine Persönlichkeit berichten.</p>
                    <!-- Ein kurzer Einführungstext über den Inhalt der Seite -->
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <!-- Breadcrumb-Navigation, um den Benutzern zu helfen, den Pfad auf der Seite nachzuvollziehen -->
        <div class="container">
            <ol>
                <li><a href="index.html">Startseite</a></li>
                <!-- Link zurück zur Startseite -->
                <li class="current">Über mich</li>
                <!-- Aktuelle Seite wird angezeigt -->
            </ol>
        </div>
    </nav>
</div>

<section id="about" class="about section">
    <!-- Hauptabschnitt "Über mich" -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Container für den "Über mich"-Abschnitt mit einem Fade-up-Effekt -->
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="./assets/img/Unbekannt.jpg" alt="Das bin ich" width="350px">
                <!-- Profilbild von dir, das eine Bildquelle und eine Breite von 350px hat -->
            </div>
            <div class="col-lg-5 content">
                <h2>HobbyNerd , Elektriker & angehender FISI.</h2>
                <!-- Eine Überschrift, die deine beruflichen Interessen beschreibt -->
                <p class="fst-italic py-3">
                    Es ist sehr wichtig, mich um die Menschen zu kümmern, die mich so wie meine Arbeit wertschätzen und anerkennen...
                    <!-- Ein Zitat oder eine Aussage über deine Werte und Einstellung -->
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Geburtstag:</strong> <span>1 Juli 1997</span></li>
                            <!-- Persönliche Information, z.B. Geburtstag -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>/</span></li>
                            <!-- Hier könnte ein Link zu einer Website eingefügt werden -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Tel.Nr:</strong> <span>+491626451814</span></li>
                            <!-- Deine Telefonnummer -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Stadt:</strong> <span>Lüdenscheid, Deutschland</span></li>
                            <!-- Deine Stadt -->
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span>27</span></li>
                            <!-- Dein Alter -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Postfach:</strong> <span>/</span></li>
                            <!-- Postfach-Adresse -->
                            <li><i class="bi bi-chevron-right"></i> <strong>E-Mail:</strong> <span>Jomsch97@gmail.com</span></li>
                            <!-- Deine E-Mail-Adresse -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Freiberuflich:</strong> <span>Verfügbar</span></li>
                            <!-- Information, ob du freiberuflich verfügbar bist -->
                        </ul>
                    </div>
                </div>
                <p class="py-3">
                    Hey, ich bin Jonas 27 Jahre alt gelernter Elektriker für Energie-, & Gebäudetechnik...
                    <!-- Ein kurzer Text über dich und deinen Werdegang -->
                </p>
                <p class="m-0">
                    Meine Leidenschaft ist das Interesse an Technologie in jeglichen Branchen...
                    <!-- Weitere Details über deine Interessen und Hobbys -->
                    Ich reise gerne, liebe die Japanische Kultur und wenn es um das Thema Serien und Filme geht bin ich ein leidenschaftlicher 
                    <a href="https://de.wikipedia.org/wiki/Otaku#:~:text=Otaku%20(jap.,Wörter%20Nerd%20oder%20Geek%20benutzt." target="_blank">Otaku</a>
                    <!-- Link zu Wikipedia über Otaku -->
                </p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials section">
    <!-- Abschnitt für Testimonials (noch ohne Inhalt) -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <!-- Swiper (Karussell/Slider für Testimonials oder Bewertungen) -->
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            <!-- Swiper Konfiguration für den Slider, der durch verschiedene Bildschirmgrößen angepasst wird -->
        </div>
    </div>
</section>
              </main>

  <?php require_once('.\assets\layout\footer.php');?>