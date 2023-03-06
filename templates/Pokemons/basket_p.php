<div class="container">
  <h4>Mon Panier</h4>
  <ul class="collection">
    <?php
    $totalPrice = 0;
    foreach ($pokemons as $pokemon) : ?>
      <li class="collection-item avatar item">
        <img src="<?= $pokemon->image ?>" alt="" class="responsive-img" style="width: 150px;">
        <div class="content">
          <span class="title"><?= h($pokemon->name) ?></span>
          <p class="price">Prix : <?= h($pokemon->price) ?></p>
        </div>
        <?= $this->Html->link(
          'delete',
          ['action' => 'removeFromBasket', $pokemon->id],
          ['class' => 'secondary-content material-icons indigo-text darken-4-text']
        ) ?>
      </li>
    <?php
    $totalPrice += $pokemon->price;
    endforeach; ?>
  </ul>
  <div class="right-align">
    <h5>Total : <?= $totalPrice ?> €</h5>
    <?= $this->Html->link('Acheter',
    ['action' => 'buy'],
    ['waves-effect waves-light btn indigo darken-4 paddingBot']
    )?>
  </div>
</div>




<style>
  .collection-item.avatar {
    display: flex;
    align-items: center;
  }

  .item {
    padding: 10px;
  }

  .content {
    margin-left: 20px;
  }

  .price {
    margin-top: 10px;
    font-weight: bold;
  }

  .paddingBot {
    margin-bottom: 20px;
  }
  
</style>