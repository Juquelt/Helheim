<script src="JS\logo.js"></script>
<header>
    <nav class="header">

        <div class="navigation">   
        <a href="/?page=home"><img id="switchLogo" onmouseover="GrimoireFerme()" onmouseout="GrimoireOuvert()" src="img\logo\0.GrimoireOuvert.png" class="book" width="130px"></a>
        <ul class="dropdown">
            <ul><a href="/?page=monde" ><h2>Monde</h2></a>
                <li class="dropdown_LI"><a href="/?page=religion" class="dropdown_Content">Religion</a></li>
                <li class="dropdown_LI"><a href="/?page=race" class="dropdown_Content">Races</a></li>
            </ul>
            <ul><h2>Bestiaires</h2></a>
                <li class="dropdown_LI"><a href="/?page=animaux_fantastiques" class="dropdown_Content">Animaux fantastiques</a></li>
                <li class="dropdown_LI"><a href="/?page=creatures_hostiles" class="dropdown_Content">Créatures hostiles</a></li>
            </ul>
            <ul><a href="/?page=JDR" ><h2>Jeux de rôle papier</h2></a></ul>

            <ul><a><h2>Mon compte</h2></a>
                <?php if (isset($_SESSION['auth'])): ?>
                    <li class="dropdown_LI"><a href="/?page=profil" class="dropdown_Content">Mon profil</a></li>
                    <li class="dropdown_LI"><a href="/?page=fiche" class="dropdown_Content">Fiche personnage</a></li>  
                    <li class="dropdown_LI"><a href="/?page=deconnexion" class="dropdown_Content">Se déconnecter</a></li>

                <?php else : ?>
                    <li class="dropdown_LI"><a href="/?page=connexion" class="dropdown_Content">Connexion</a></li>
                    <li class="dropdown_LI"><a href="/?page=inscription" class="dropdown_Content">Inscription</a></li>
                <?php endif; ?>
            </ul>
        </ul>
        </div>
    </nav>
</header>

</header>



