<div class="container-fluid">
  <div class="row">
    <div class="col s12">
      <h4>Boutique</h4>
      <label>Trier</label>
      <label>Trier</label>
      <select class="browser-default" id="sort-selector" onchange="sortShop()">
        <option value="1" <?php if ($method == 1) {
                            echo 'selected';
                          } ?>>Prix Croissant</option>
        <option value="2" <?php if ($method == 2) {
                            echo 'selected';
                          } ?>>Prix Décroissant</option>
        <option value="3" <?php if ($method == 3) {
                            echo 'selected';
                          } ?>>Nom</option>
        <option value="4" <?php if ($method == 4) {
                            echo 'selected';
                          } ?>>Type</option>
      </select>
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
                        <?= $this->Html->link(
                            '<img class="responsive-img pokemon-image" src="'. $pokemon->image. '">',
                            ['action' => 'description', $pokemon->id],
                            ['escapeTitle' => FALSE]
                        ); ?>
                    </div>
                    <div class="card-content">
                      <span class="card-title"><?= $pokemon->name ?></span>
                      <p><?= $pokemon->price ?></p>
                      <?= $this->Html->link(
                        'add_shopping_cart',
                        ['action' => 'addToBasket', $pokemon->id],
                        ['class' => 'material-icons indigo-text darken-4-text']
                      ) ?>
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

  .scroll-view {
    overflow-x: hidden;
  }

  .pokemon-image {
    max-width: 50%;
  }
</style>

<script>
  const sortSelector = document.getElementById('sort-selector');

  sortSelector.addEventListener('change', function() {
    const selectedValue = this.options[this.selectedIndex].value;
    window.location.href = '/Pokemons/shop/' + selectedValue;
  });
</script>
