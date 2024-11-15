<?php require_once('.\assets\layout\header.php');?>

    
<?php require_once('.\assets\layout\header.php'); ?>
<!-- Dieser PHP-Befehl fügt die "header.php"-Datei ein. Sie wird vermutlich für das Laden des Kopfbereichs der Seite verwendet, wie z.B. Navigation und Meta-Daten -->

<section id="hero" class="hero section"> 
    <!-- Hero-Abschnitt, der den ersten Eindruck der Seite gibt, meist mit einer Begrüßung oder einem Einführungstext -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <!-- Der Inhalt im Hero-Abschnitt ist in einer Container- und Grid-Struktur eingebaut. Der Inhalt wird mit AOS (Animate on Scroll) animiert -->
                <h1>Willkommen auf meiner persönlichen Website!</h1> 
                <!-- Begrüßung der Benutzer auf der Website -->
                <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
                <!-- Information zum Kurs, der die Website begleitet -->
                <p>Informatiker Winter 2024</p>
                <!-- Dein Studiengang und Semester -->
                <p>Name: Jonas Schneider</p>
                <!-- Dein Name -->
                <p>Standort: Lüdenscheid</p>
                <!-- Dein Standort -->
            </div>
        </div>
    </div>

</section>

<section id="gallery" class="gallery section"> 
    <!-- Galerie-Abschnitt für Bilder, die in einer Galerieansicht angezeigt werden -->

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <!-- Container für die Galerie, wieder mit einem AOS-Effekt für Fade-Up-Animation beim Scrollen -->

        <div class="row gy-4 justify-content-center">
            <!-- Grid-Anordnung für die Galeriebilder, mit Abständen zwischen den Bildern (gy-4) und zentrierter Ausrichtung der Spalten -->
            
            <div class="col-xl-3 col-lg-4 col-md-6">
                <!-- Diese Spalte zeigt ein Bild an. Es wird für verschiedene Bildschirmgrößen angepasst (XL, LG, MD) -->
                <div class="gallery-item h-200">
                    <!-- Einzelnes Galerieelement (mit einer festen Höhe von 200px) -->
                    <img src="assets/img/gallery/Urlaub1.jpg" class="img-fluid" alt=""> 
                    <!-- Das Bild, das in der Galerie angezeigt wird. Das `img-fluid` sorgt dafür, dass das Bild responsive ist (d.h., es passt sich der Bildschirmgröße an) -->
                    
                    <div class="gallery-links d-flex align-items-center justify-content-center">
                        <!-- Links für die Galerie mit einer flexiblen Ausrichtung der Icons in der Mitte des Bildes -->
                        <a href="assets/img/gallery/Urlaub1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        <!-- Lightbox-Preview-Link, um das Bild in einer Lightbox zu öffnen. Das `bi bi-arrows-angle-expand`-Icon zeigt ein Vergrößerungssymbol an -->
                        
                        <a href="about.php" class="details-link"><i class="bi bi-link-45deg"></i></a> 
                        <!-- Ein Link zu einer "About"-Seite, der mit einem Icon versehen ist, das aussieht wie ein Verknüpfungssymbol -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</main>
<!-- Das Ende des Hauptinhalts -->


  
  <?php require_once('.\assets\layout\footer.php');?>
 
