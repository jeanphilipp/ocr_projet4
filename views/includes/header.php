<header>
    <div class="blog-header py-3">
        <h1 class="text-center">Blog de Jean Forteroche</h1>
        <p class="text-center font-italic">Acteur et écrivain</p>
        <nav class="nav justify-content-center text-uppercase font-weight-bold">
            <a class="p-2 text-muted" href="index.php?page=home">Accueil</a>
            <a class="p-2 text-muted" href="index.php?page=listChapters">Chapitres</a>
            <a class="p-2 text-muted" href="index.php?admin&page=espace-perso">Espace personnel</a>

            <?php if (!empty($_SESSION['pseudo'])) { ?>

                <a class="p-2 text-muted" href="index.php?page=logout">
                    <?php
                    $guest = "";
                    $guest = $_SESSION['pseudo'];
                    echo $_SESSION['pseudo'] . " : Déconnectez-vous ";
                    ?>
                </a>

            <?php } ?>

        </nav>
    </div>
</header>


