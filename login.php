<?php require_once('.\assets\layout\header.php');?><!-- Header -->

    
    <section id="hero" class="hero section"> <!-- Class im main.class section "design" -->

    <div class="container">
         <h1>Login</h1> <!-- überschrift Login -->
         <form>
             <div class="form-group">
                 <label for="username">Benutzername:</label> <!-- Label des Textfeldes(input) -->
                 <input type="text" class="form-control" id="username" placeholder="Benutzername eingeben"> <!-- Input abfrage des "usernames" mit Platzhalter -->
             </div> <!-- Division -->
             <div class="form-group">
                 <label for="password">Passwort:</label><!-- Labeltextfeld(input) -->
                 <input type="password" class="form-control" id="password" placeholder="Passwort eingeben"><!-- Input abfrage des "passwort" mit Platzhalter -->
             </div>
             <button type="submit" class="btn btn-primary">Einloggen</button><!-- button funktion absenden btn primary einloggen weiterleitung auf die gleiche seite -->
         </form>
     </div>


          
      </div>

    </section>

  </main>

  
  <?php require_once('.\assets\layout\footer.php');?><!-- Footer -->
 
