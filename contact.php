<?php require_once('.\assets\layout\header.php');?>

    
  <!-- Abschnitt für den Seitentitel mit AOS-Animation (Animation on Scroll) -->
<div class="page-title" data-aos="fade"> 
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Kontakt</h1> <!-- Überschrift, die den Titel der Seite zeigt -->
                    <p class="mb-0">Bei Fragen oder Anregungen können Sie mich gerne kontaktieren,<br>
                    ich stehe Ihnen gerne zur Veerfügung und werde mich zeitnah zurückmelden.</p> <!-- Ein Absatz mit einer kurzen Nachricht, der den Zweck der Kontaktseite erklärt -->
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumbs zur Navigation durch die Website -->
    <nav class="breadcrumbs">
        <div class="container">
            <ol> <!-- Geordnete Liste für die Navigation -->
                <li><a href="index.html">Startseite</a></li> <!-- Link zur Startseite -->
                <li class="current">Kontakt</li> <!-- Aktuelle Seite wird hervorgehoben -->
            </ol>
        </div>
    </nav>
</div>

<!-- Abschnitt für die Kontaktinformationen -->
<section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
            <!-- Row für die Informationen -->
            <div class="row gy-5">

                <!-- Erste Spalte: Standortinformationen -->
                <div class="col-lg-4"> 
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-geo-alt flex-shrink-0"></i> <!-- Bootstrap Icon für den Standort -->
                        <div>
                            <h3>Standort</h3> <!-- Überschrift für den Standort -->
                            <p>Lüdenscheid 58507</p> <!-- Adresse -->
                        </div>
                    </div>
                </div>

                <!-- Zweite Spalte: Telefonnummer -->
                <div class="col-lg-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-telephone flex-shrink-0"></i> <!-- Bootstrap Icon für das Telefon -->
                        <div>
                            <h3>Tel.Nr</h3> <!-- Überschrift für Telefonnummer -->
                            <p>+491626451814</p> <!-- Telefonnummer -->
                        </div>
                    </div>
                </div>

                <!-- Dritte Spalte: E-Mail-Adresse -->
                <div class="col-lg-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="bi bi-envelope flex-shrink-0"></i> <!-- Bootstrap Icon für E-Mail -->
                        <div>
                            <h3>E-Mail</h3> <!-- Überschrift für E-Mail -->
                            <p>Jomsch97@gmail.com</p> <!-- E-Mail-Adresse -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Kontaktformular -->
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
            <div class="row gy-4">

                <!-- Eingabefeld für den Namen -->
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Dein Name" required=""> <!-- Pflichtfeld für den Namen -->
                </div>

                <!-- Eingabefeld für die E-Mail -->
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Deine E-Mail" required=""> <!-- Pflichtfeld für die E-Mail -->
                </div>

                <!-- Eingabefeld für den Betreff -->
                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Titel" required=""> <!-- Pflichtfeld für den Betreff -->
                </div>

                <!-- Eingabefeld für die Nachricht -->
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Deine Nachricht" required=""></textarea> <!-- Pflichtfeld für die Nachricht -->
                </div>

                <!-- Abschnitt für den Submit-Button und Nachrichtensystem -->
                <div class="col-md-12 text-center">
                    <div class="loading">Läd..</div> <!-- Anzeige einer Ladeanzeige -->
                    <div class="error-message"></div> <!-- Anzeige von Fehlernachrichten -->
                    <div class="sent-message">Deine Nachricht wurde versendet Danke!</div> <!-- Anzeige einer Bestätigungsnachricht nach dem Absenden -->

                    <button type="submit">Senden</button> <!-- Absende-Button für das Formular -->
                </div>

            </div>
        </form>
    </div>
</section>

  <?php require_once('.\assets\layout\footer.php');?>