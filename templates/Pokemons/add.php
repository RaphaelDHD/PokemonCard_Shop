<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout</title>
    <?= $this->Html->css(['add']); ?>
</head>
<body>
<div class="container addctn">
    <h1>Formulaire Pokémon</h1>
    <?= $this->Form->create() ?>
        <div class="input-field">
            <?= $this->Form->text('nom_pokemon', [
                'id' => 'nom_pokemon'
            ]);
            ?>
            <?= $this->Form->label('nom_pokemon',
                'Nom du Pokémon'
            );
            ?>
        </div>
        <p>
            <label>
                <input type="checkbox" class="filled-in" id="prix_personnalise" name="prix_personnalise">
                <span>Prix personnalisé ?</span>
            </label>
        </p>
        <div class="input-field">
            <?= $this->Form->number('prix', [
                'id' => 'prix'
            ]);
            ?>
            <?= $this->Form->label('prix',
                'Prix personnalisé (en euros)'
            );
            ?>
        </div>
    <?= $this->Form->button('Ajouter <i class="material-icons right">add_circle</i>',['class' => "btn waves-effect waves-light standard", 'escapeTitle' => false]) ?>
    <?= $this->Form->end() ?>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
