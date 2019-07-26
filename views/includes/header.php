<header>

<div class="blog-header py-3">

    <h1 class="text-center">Blog de Jean Forteroche</h1>
    <p class="text-center font-italic">Acteur et écrivain</p>
            <nav class="nav justify-content-center text-uppercase font-weight-bold">
                <a class="p-2 text-muted" href="index.php?page=home">Accueil</a>
                <a class="p-2 text-muted" href="index.php?page=listChapters">Chapitres</a>

                <a class="p-2 text-muted" href="index.php?admin&page=espace-perso">Espace personnel</a>


                <a class="p-2 text-muted" href="index.php?page=logout">


                    <?php $visiteur=""; $visiteur = $_SESSION['pseudo'];
                if(!empty($visiteur)) {
                    echo $visiteur .  " : Déconnectez-vous ";
                    }
?>
                    </a>

            </nav>
</div>
</header>


