<div class="section"></div>
<main>
  <center>
    <img class="responsive-img" style="width: 250px;" src="/img/pokemon_logo.png" />
    <div class="section"></div>

    <h5 class="amber-text text-darken1">Créez votre compte !</h5>
    <div class="section"></div>

    <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <?= $this->Form->create(null, ['class' => 'col s12']) ?>
        <div class="row">
          <div class="input-field col s12">
            <?= $this->Form->label('name', 'Name') ?>
            <?= $this->Form->input('name', ['class' => 'validate', 'type' => 'text']) ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <?= $this->Form->label('email', 'E-Mail') ?>
            <?= $this->Form->input('email', ['class' => 'validate', 'type' => 'email']) ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <?= $this->Form->label('password', 'Mot de passe') ?>
            <?= $this->Form->input('password', ['class' => 'validate', 'type' => 'password']) ?>
          </div>
        </div>
        <br>
        <center>
          <div class="row">
            <?= $this->Form->button('Créez votre compte', ['class' => 'col s12 btn btn-large waves-effect amber darken1', 'type' => 'submit']) ?>
          </div>
        </center>
        <?= $this->Form->end() ?>
      </div>
    </div>
    <?= $this->Html->link('Vous avez déjà un compte ? Connectez vous !', '/users/login') ?>
  </center>

  <div class="section"></div>
  <div class="section"></div>
</main>