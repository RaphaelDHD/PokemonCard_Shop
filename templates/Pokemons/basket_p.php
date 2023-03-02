<div class="container">
  <h4>Mon Panier</h4>
  <ul class="collection">
    <?php foreach ($pokemons as $pokemon) : ?>
      <li class="collection-item avatar item">
        <img src="<?= $pokemon->image ?>" alt="" class="responsive-img" style="width: 150px;">
        <div class="content">
          <span class="title"><?= h($pokemon->name) ?></span>
          <p class="price">Prix : <?= h($pokemon->price) ?></p>
        </div>
        <?= $this->Html->link('delete',
         ['action' => 'removeFromBasket', $pokemon->id],
         ['class' => 'secondary-content material-icons indigo-text darken-4-text']) ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="right-align">
    <a class="waves-effect waves-light btn indigo darken-4"><i class="material-icons left">shopping_cart</i>Acheter</a>
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
</style>