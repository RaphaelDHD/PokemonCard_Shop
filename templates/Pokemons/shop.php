<div class="container-fluid">
  <div class="row">
    <div class="col s12">
      <h4>Boutique</h4>
      <label>Trier</label>
      <?= $this->Form->select(
        'method',
        [
          '1' => 'Prix Croissant',
          '2' => 'Prix Décroissant',
          '3' => 'Nom',
          '4' => 'Type'
        ],
        [
          'class' => 'browser-default',
          'id' => 'sort-selector',
          'onchange' => 'sortShop()',
          'default' => $method
        ]
      ) ?>
      <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($pokemons as $pokemon) : ?>
          <?php if ($i % 5 == 0) : ?>
      </div>
      <div class="row">
      <?php endif; ?>
      <div class="col s12 m3 resize">
        <div class="card">
          <div class="card-image center-align">
            <?= $this->Html->link(
              '<img class="responsive-img pokemon-image" src="' . $pokemon->image . '">',
              ['action' => 'description', $pokemon->id],
              ['escapeTitle' => FALSE]
            ); ?>
          </div>
          <div class="card-content">
            <span class="card-title"><?= $pokemon->name ?></span>
            <p><?= $pokemon->price . ' $' ?></p>
            <?= $this->Html->link(
              'add_shopping_cart',
              ['action' => 'addToBasket', $pokemon->id],
              ['class' => 'material-icons indigo-text darken-4-text']
            ) ?>
          </div>
        </div>
      </div>
      <?php $i++; ?>
    <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<style>
  @media only screen and (min-width: 601px) {
    .scroll-view .col.m3 {
      width: 19%;
      display: inline-block;
      float: none;
    }
  }

  .col.s6.m3 {
    width: 100%;
    max-width: 20%;
    padding: 0 8px;
  }
</style>

<script>
  const sortSelector = document.getElementById('sort-selector');

  sortSelector.addEventListener('change', function() {
    const selectedValue = this.options[this.selectedIndex].value;
    window.location.href = '/Pokemons/shop/' + selectedValue;
  });
</script>