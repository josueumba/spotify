<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Design Spotify</title>
</head>
<body>
    <!-- div principal -->
    <div id="contenaire">
        <main class="d-flex">
            <aside class="w-25">
                <!-- div accueil et recherche -->
                <div class="aside1">
                    <span class="h-50">Accueil</span>
                    <span class="h-50">Rechercher</span>
                </div>

                <!-- div bibliothèque -->
                <div class="aside2">
                    <span class="span1" style="color: rgb(189, 189, 189);">
                        <span>Bibliothèque</span>
                        <span style="font-size:20pt">+</span>
                    </span>
                    <span class="aside2 aside21">
                        <span class="span2">
                            <h5>Créez votre première playlist</h5>
                            <p style="font-size:14px">C'est simple, nous allons vous aider</p>
                            <button>Créer une playlist</button>
                        </span>
                        <span class="span3">
                            <h5>Cherchons quelques podcasts auxquels vous abonner</h5>
                            <p style="font-size:14px">Nous vous transmettrons des informations sur les nouveaux épisodes</p>
                            <button>Parcourir les podcasts</button>
                        </span>
                    </span>
                    <span class="span4">
                        <p id="cookie">Cookies</p>
                        <span><button class=>Français</button></span>
                    </span>
                </div>
            </aside>
            <section class="w-75">
                <header>
                    <span id="left">        
                        <span><</span>
                        <span>></span>
                    </span>
                    <span id="right">
                        <span>S'inscrire</span>
                        <span><button>Se connecter</button></span>
                    </span>
                </header>
                <div class="head">
                    <span class="span1">Playlists Spotify</span>
                    <span class="span2">Tout afficher</span>
                </div>
                <div class="centre">
                    <span class="w-20">
                        <img src="images/a1.jpg" width="100%"; height="60%" alt="PHOTO">
                        <h4>Today's Top Hits</h4>
                        <p>Travis Scott is on top of the Hottest 50t</p>
                    </span>
                    <span class="w-20">
                        <img src="images/a2.jpg" width="100%"; height="60%" alt="PHOTO">
                        <h4>RapCaviar</h4>
                        <p>Music from Travis Scott, Drake and Latto.</p>
                    </span>
                    <span class="w-20">
                        <img src="images/main.jpg" width="100%"; height="60%" alt="PHOTO">
                        <h4>All Out 2010s</h4>
                        <p>The biggest songs of the 2010s</p>
                    </span>
                    <span class="w-20">
                        <img src="images/londres.jpg" width="100%"; height="60%" alt="PHOTO">
                        <h4>Rock Classics</h4>
                        <p>Rock legends & epic songs that continue t...</p>
                    </span>
                    <span class="w-20">
                        <img src="images/paris.jpg" width="100%"; height="60%" alt="PHOTO">
                        <h4>Chill Hits</h4>
                        <p>Kick back to the best new and recent chill hits</p>
                    </span>
                </div>
            </section>
        </main>

        <footer class="pied">
            <span>
                <p><span style="text-transform:uppercase">extrait sur spotify</span> <br>
                Inscrivez-vous pour écouter titres et podcasts en illimité, avec quelques coupures pub. Pas besoin de carte de crédit.</p>
            </span>
            <button>S'inscrire gratuitement</button>
        </footer>
    </div>
</body>
</html>