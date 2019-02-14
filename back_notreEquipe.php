<?php include('header.php') ?>
    
    <body class="body-uni">
<!-- Header sur toutes les pages -->
<!--        section contenant les articles de la page-->
        <section class="equipe">
<!--        partie organigramme-->
            <article class="org">
                <img id="organi" src="../images/organigramme.png" alt="organigramme">

            </article>
    <!--        formulaire candidature-->
            <article class="candidat">
<!--  pour éviter d'avoir les 2 formulaires sur la même page : création de 2 pages html identiques avec chacune le formulaire voulu donc création de liens ramenant à la page contenant le formulaire souhaité contenu dans une div pour la mise en forme-->
                <div class="lienCand"><a href="notreEquipeCandidat.php">Rejoignez-nous</a></div>
                <div ><a href="notreEquipeCollab.php"> Devenez Collaborateur </a></div>
                <form method="post" action="traitement-candidat.php" enctype="multipart/form-data">
                    <input type="text" name="nom" placeholder="Nom"/>
                    <input type="text" name="prenom" placeholder="Prenom"/>
                    <input type="email" name="email" placeholder="email"/>
                    <label for="cv"> Votre CV
                        <input type="file" name="cv" id="cv" />
                    </label>
                    <textarea id="motivations" name="motivations" placeholder="Décrivez vos motivitations"></textarea>
                    <button id="btnPostule" type="submit"> Postulez !</button>
                </form>
            </article>

        </section>
        <!-- footer -->
<?php include('footer.php') ?>