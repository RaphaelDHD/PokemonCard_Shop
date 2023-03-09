<div class="container-fluid">
  <div class="row">
    <div class="col s12">
      <h4>Mes cartes</h4>
      <div class="row no-gutters">
        <div class="col s12">
            <?php $i = 0; ?>
            <?php foreach ($pokemons as $pokemon) : ?>
              <?php if ($i % 5 == 0) : ?>
                <div class="row">
              <?php endif; ?>
              <div class="col s12 m3 resize">
                <div class="card">
                  <div class="card-image center-align">
                      <?= $this->Html->link(
                          '<img class="responsive-img pokemon-image" src="'. $pokemon->image. '">',
                          ['action' => 'description', $pokemon->id],
                          ['escapeTitle' => FALSE]
                      ); ?>

                  </div>
                  <div class="card-content">
                  <span class="card-title"><?= $pokemon->name ?></span>
                    <p><?= $pokemon->price.' $' ?></p>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
              <?php if ($i % 5 == 0 || $i == 151) : ?>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
            <?php if($i == 0) {

              echo "<h2 >C'est un peu vide ici...</h2>";
            } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .scroll-view .row {
  margin-bottom: 0;
  margin-left: 2em;
}

.scroll-view .col {
  padding: 0 8px;
}

@media only screen and (min-width: 601px) {
  .scroll-view .col.m3 {
    width: 19%;
    display: inline-block;
    float: none;
  }
}

.scroll-view{
  overflow-x: hidden;
}

.pokemon-image {
  max-width: 50%;
}
</style>
