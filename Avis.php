<! DOCTYPE html>
    <html>
        <head>
            <title>Acceuil</title>
            <meta charset='UTF-8'>
            <meta name='charset' content ="width= device-width , initial-scale=1.0">
            <link rel='stylesheet' href='home.css'>
            <script src='home.js' async></script>
        </head>
        <body  class='bod'>
            <header>
            <div class='entete'>
                <div class='entete_gauche'><h1><a href='home.php'>LIFE-CITATIONS</a></h1></div>
                <div class='entete_droite'>
                    <ul>
                        <li><a href='home.php' class='lien'>Acceuil</a></li>
                        <li><a href='Avis.php' class='lien'>Avis</a></li>
                    </ul>
                </div>
            </div>
          </header>
                <form action='recuperation.php' method='post'>
                    <fieldset>
                        <legend>Votre Avis</legend>
                        <div class='all_partie'>
                          <div class='chacun'>
                              <label for='name'>Votre prenom</label>
                              <input type='text' id='name' placeholder='prenom' name='prenom'>
                          </div>
                          <div class='chacun'>
                              <label for='mail'>Votre address mail</label>
                              <input type='email' id='mail' placeholder='email' name='mail'>
                          </div>
                          <div class='chacun'>
                              <label for='numero'>Votre numero de telephone</label>
                              <input type='number' id='numero' placeholder='telephone' max='99999999' name='telephone'>
                          </div>
                          <div class='chacun'>
                              <textarea placeholder='votre avis' id='votreavis' name='avis' maxlength="500"></textarea>
                          </div>
                          <div class='chacun'>
                            <input type='submit' value='Valider' id='envoyer'>
                          </div>
                      </div>
                    </fieldset>
                </form>
               <footer>
            <p><a href='#'>Copyright-@edgar-2021</a></p>
            <div class='social'>
                <a href='https://www.instagram.com/edmorinio/?hl=fr' target='_blank' class='imsocial'><i class="fab fa-instagram" id='inst'></i></a>
                <a href='https://www.facebook.com/kondi.gnofame.77' target='_blank' class='imsocial'><i class="fab fa-facebook"></i></i></i></a>
                <a href='https://twitter.com/EdGnof' target='_blank' class='imsocial'><i class="fab fa-twitter" id='twt'></i></a>
                <p><i class="fas fa-phone-alt"></i><span>93 73 70 27</span></p>
            </div>
          </footer>
        </body>
    </html>
    