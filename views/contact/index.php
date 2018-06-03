<!--MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-5 hidden-sm hidden-xs">
            <center>
                <img src="images/camimmo_logo.png" class=logo>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Camimmo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" action="index.php?controller=contact&action=confirm" method="POST">
                
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Identité</h2>
                    <h3 class="fs-subtitle">Entrez vos informations</h3>
                    <input type="text" name="fname" placeholder="Prenom"/>
                    <input type="text" name="lname" placeholder="Nom"/>
                    <input type="button" name="next" class="next action-button" value="Suivant"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Coordonnées</h2>
                    <h3 class="fs-subtitle">Entrez vos coordonnées</h3>
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="text" name="phone" placeholder="Numéro de téléphone"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                    <input type="button" name="next" class="next action-button" value="Suivant"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Message</h2>
                    <h3 class="fs-subtitle">Choississez le sujet, puis ecrivez votre message</h3>
                    <select class="form-control" name="id_type">
                        <option value="1">Acheter</option>
                        <option value="2">Vendre</option>
                        <option value="3">Autre</option>
                    </select>
                    <textarea class="form-control" name="message"></textarea>
                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                    <input type="submit" name="submit" class="submit action-button" value="Envoyer"/>
                </fieldset>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Noms</li>
                    <li>Coordonnées</li>
                    <li>Message</li>
                </ul>
            </form>
        </div>
    </div>
    <!-- /.MultiStep Form -->
</div>
