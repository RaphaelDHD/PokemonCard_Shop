<div class="section"></div>
<main>
    <center>
        <img class="responsive-img" style="width: 250px;" src="/img/pokemon_logo.png" />
        <div class="section"></div>

        <h5 class="amber-text text-darken1">Créez votre compte !</h5>
        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <?= $this->Form->create(null , ['class' => 'col s12']) ?>
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>Enter your email</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>Enter your password</label>
                        </div>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <?= $this->Form->button('Connexion',['class' => 'col s12 btn btn-large waves-effect amber darken1', 'type' => 'submit'])?>
                        </div>
                    </center>
                    <?= $this->Form->end()?>
            </div>
        </div>
        <a href="">Créez votre compte</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>