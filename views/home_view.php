<!DOCTYPE html>
<html lang="fr">
<head>
    <?include_once 'views/includes/head.php'; ?>
    <title><?= ucfirst($page) ?>-Projet 4-Blog!</title>
</head>

<body>

<?php include_once 'views/includes/header.php'; ?>

<div id="wrapper">
    <section>
        <div id="part1">
            <div id="phot"><img class="book" src="assets/images/alaska.jpg" alt="alaska"></div>
        </div>
        <div id="part2">
            <p class="para1">Bienvenue sur mon blog</p>
            <p>J'écris actuellement un nouveau roman intitulé :</p>
            <p class="para2">"Billet simple pour l'Alaska"</p>
            <p>Je vous propose de m'accompagner dans ce voyage</p>
            <p>Pour cela, créer un compte sur votre espace personnel, et vous découvrirez les chapitres au fur et à mesure de leur écriture</p>
            <p>Partons ensemble pour cette belle aventure !</p>
        </div>
    </section>

    <div id="part3">
        <h2>Les chapitres</h2>
        <article>
            <figure>
                <figcaption>Chapitre 1</figcaption>
                <img class="country" src="assets/images/alaska1.jpg" alt="alaska">
            </figure>
            <p class="chap">J'avais un rêve ! </p>
            <p><a href="#" class="link1">Lire la suite</a></p>
        </article>

        <article>
            <figure>
                <figcaption>Chapitre 2</figcaption>
                <img class="country" src="assets/images/alaska1.jpg" alt="alaska">
            </figure>
            <p class="chap">Quand le rêve devient réalité !</p>
            <p><a href="#" class="link1">Lire la suite</a></p>
        </article>

        <article>
            <figure>
                <figcaption>Chapitre 3</figcaption>
                <img class="country" src="assets/images/alaska1.jpg" alt="alaska">
            </figure>
            <p class="chap">L'aventure continue ! </p>
            <p><a href="#" class="link1">Lire la suite</a></p>
        </article>

        <article>
            <figure>
                <figcaption>Chapitre 4</figcaption>
                <img class="country" src="assets/images/alaska1.jpg" alt="alaska">
            </figure>
            <p class="chap">La rencontre qui a tout changé ! </p>
            <p><a href="#" class="link1">Lire la suite</a></p>
        </article>

        <article>
            <figure>
                <figcaption>Chapitre 5</figcaption>
                <img class="country" src="assets/images/alaska1.jpg" alt="alaska">
            </figure>
            <p class="chap">Un nouveau départ ! </p>
            <p><a href="#" class="link1">Lire la suite</a></p>
        </article>
    </div>

    <section>
        <div id="part4">
            <div id="phot2">
                <img class="portr" src="assets/images/portrait.jpg" alt="portrait de Jean Forteroche" >
            </div>
        </div>

        <div id="part5">
            <p>Jean Forteroche est né le 20 septembre 1970 à Lyon.Après l'obtention de son baccalauréat, il s'inscrit à la faculté de droit,
            ou il fréquente des cours de théâtre</p>
            <p>Il est remarqué lors d'une représentation par un producteur de films qui lui propose un rôle</p>
            <p>Sa carrière d'acteur d'école et il tourne dans plusieurs films d'action</p>
            <p>A un  tournant de sa carriere professionnelle, il s'adonne à l'écriture et ses livres rencontrent un grand succès auprés du public</p>
            <p>Il se consacre désormais à cette grande passion qu'est l'écriture !</p>
        </div>
    </section>


<?php include_once 'views/includes/footer.php' ?>
<script src="assets/js/app.js"></script>

</div>
</body>

</html>