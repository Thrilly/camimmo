<!--MultiStep Form -->
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-5 hidden-sm hidden-xs">
            <img src="images/camimmo_logo.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h1>Camimmo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" action="index.php?controller=indexAdmin&action=loginProcess" method="POST">
                <fieldset>
                    <h2 class="fs-title">Connexion</h2>
                    <h3 class="fs-subtitle">Espace réservé aux administrateurs</h3>
                    <input type="txt" name="login" placeholder="Login"/>
                    <input type="text" name="password" placeholder="Mot de passe"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                    <input type="submit" name="submit" class="submit action-button" value="Envoyer"/>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- /.MultiStep Form -->
</div>
