<?= $this->Html->css(['add']); ?>

<div class="container">
    <h3>Ajouter une carte à la boutique</h3>
    <?= $this->Form->create($pokemon,['type' => 'file']) ?>
        <div class="input-field">
            <?= $this->Form->text('name', [
                'id' => 'nom_pokemon'
            ]);
            ?>
            <?= $this->Form->label('nom_pokemon',
                'Nom du Pokémon ( ex : Pikachu )'
            );
            ?>
        </div>
        <div class="file-field input-field">
            <div class="btn">
                <span>Carte du Pokemon (format png/jpg)</span>
                <?= $this->Form->file('image_pokemon'); ?>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        <div class="input-field">
            <?= $this->Form->text('type1', [
                'id' => 'type1_pokemon'
            ]);
            ?>
            <?= $this->Form->label('type1_pokemon',
                'Type 1 du Pokémon'
            );
            ?>
        </div>
        <div class="input-field">
            <?= $this->Form->text('type2', [
                'id' => 'type2_pokemon'
            ]);
            ?>
            <?= $this->Form->label('type2_pokemon',
                'Type 2 du Pokémon'
            );
            ?>
        </div>
        <div class="input-field">
            <?= $this->Form->number('price', [
                'id' => 'prix_pokemon'
            ]);
            ?>
            <?= $this->Form->label('prix_pokemon',
                'Prix de votre carte'
            );
            ?>
        </div>
        <div class="input-field">
            <?= $this->Form->number('stock', [
                'id' => 'stock_pokemon'
            ]);
            ?>
            <?= $this->Form->label('stock_pokemon',
                'Nombre de carte à mettre en vente'
            );
            ?>
        </div>
    <?= $this->Form->button('Ajouter <i class="material-icons right">add_circle</i>',['class' => "btn waves-effect waves-light standard noH", 'escapeTitle' => false, 'type' => 'submit']) ?>
    <?= $this->Form->end() ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

