<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Description de <?= $pokemon->name ?></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <div class="card-image">
                    <img src="<?= $pokemon->image ?>">
                </div>
                <div class="card-content">
                    <span class="card-title"><?= $pokemon->name ?></span>
                    <p><strong>Types:</strong> <?= $pokemon->type1 ?>
                        <?= $pokemon->type2 ?>
                    </p>
                    <p><strong>Stock en boutique:</strong> <?= $pokemon->stock ?> </p>
                    <p><strong>Prix:</strong> <?= $pokemon->price."€" ?> </p>
                </div>
                <div class="card-action">
                    <?php
                    if($send == 0) {
                        echo $this->Html->link('Retour',
                            ['action' => 'index'],
                            ['class' => "waves-effect waves-light btn"]);
                    }
                    elseif($send == 1) {
                        echo $this->Html->link('Acheter la carte',
                            ['action' => 'addToBasket', $pokemon->id],
                            ['class' => "waves-effect waves-light btn"]);
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
