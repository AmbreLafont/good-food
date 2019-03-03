<?php $page = "Notre équipe" ?>
<?php include('header.php') ?>
    <?php $page = "Notre équipe / recrutement" ?>
    <body class="body-uni">

<!--        section contenant les articles de la page-->
        <section class="equipe">
<!--        partie organigramme-->
            <article class="org">
                <img id="organi" src="../images/organigramme.png" alt="organigramme">

            </article>
             </article>
    <!--        formulaire candidature-->
            <article class="candidat">
                <div class="lienCand">Rejoignez-nous</div>
                <div >Devenez Collaborateur</div>
                <form method="post" action="traitement-candidat.php" enctype="multipart/form-data">
                    <input type="text" name="nom" placeholder="Nom" required />
                    <input type="text" name="prenom" placeholder="Prenom" required/>
                    <input type="email" name="email" placeholder="email" required/>
                    <label for="cv"> Votre CV
                        <input type="file" name="cv" id="cv" required/>
                    </label>
                    <textarea id="motivations" name="motivations" placeholder="Décrivez vos motivitations" required></textarea>
                    <button id="btnPostule" type="submit"> Postulez !</button>
                </form>
            </article>
            <!--        formulaire collaborateur-->
            <article class="collab">
                <div >Rejoignez-nous</div>
                <div class="lienCollab"> Devenez Collaborateur </div>
                <form method="post" action="traitement-collab.php">
                    <input type="text" name="nom" placeholder="Nom de votre entreprise" required/>
                    <input type="email" name="email" placeholder="email"required/>
                    <textarea id="projet" name="projet" placeholder="Décrivez votre projet" required></textarea>
                    <button id="btnCollab" type="submit"> Collaborons ! </button>
                </form>
            </article>

        </section>

        <!-- footer -->
<?php include('footer.php') ?>