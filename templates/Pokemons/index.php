<div class="container-fluid">
  <div class="row">
    <div class="col s12">
      <h4>Boutique</h4>
      <div class="row no-gutters">
        <div class="col s12">
          <div class="scroll-view" style="max-height: 550px; overflow-y: auto;">
            <?php $i = 0; ?>
            <?php foreach ($pokemons as $pokemon) : ?>
              <?php if ($i % 5 == 0) : ?>
                <div class="row">
              <?php endif; ?>
              <div class="col s6 m3">
                <div class="card">
                  <div class="card-image center-align">
                    <img class="responsive-img pokemon-image" src="<?= $pokemon->image ?>">
                    <span class="card-title"><?= $pokemon->name ?></span>
                  </div>
                  <div class="card-content">
                    <p><?= $pokemon->price ?></p>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
              <?php if ($i % 5 == 0 || $i == 151) : ?>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
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

.pokemon-image {
  max-width: 50%;
}
</style>
