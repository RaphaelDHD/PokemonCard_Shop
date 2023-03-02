<div class="container">
  <h4>Mon Panier</h4>
  <div class="row">
    <?php foreach ($pokemons as $pokemon) : ?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="<?= $pokemon->image ?>">
            <span class="card-title"><?= h($pokemon->name) ?></span>
          </div>
          <div class="card-content">
            <p>Prix : <?= h($pokemon->price) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>