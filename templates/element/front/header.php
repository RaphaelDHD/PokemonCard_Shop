<nav class="white fixed" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo"> <?= $this->Html->image('pokemon_logo.png')?> </a>
        <ul class="right hide-on-med-and-down">
            <li>
                <?= $this->Html->link('<i class = "material-icons red-text"> add_circle </i>', ['action' => 'create'], ['class' => 'white-text', 'escapeTitle' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('Boutique', ['action' => 'shop']) ?>
            </li>
            <li>
                <?= $this->Html->link('Mes cartes', ['action' => 'index']) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class = "material-icons black-text"> shopping_cart </i>', ['action' => '/basketP'], ['class' => 'white-text', 'escapeTitle' => false]) ?>
            </li>
            <li>
                <?php
                if ($this->request->getSession()->read('Auth.id')) {
                    echo $this->Html->link('Deconnexion', '/users/logout', ['class' => 'amber darken-1 bold']);
                } else {
                    echo $this->Html->link('Connexion', '/users/login', ['class' => 'amber darken-1 bold']);
                }
                ?>
            </li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li>
                <?= $this->Html->link('Boutique', ['action' => '/shop']) ?>
            </li>
            <li>
                <?= $this->Html->link('Mes cartes', ['action' => '/index']) ?>
            </li>
            <li>
                <?php
                if ($this->request->getSession()->read('Auth.id')) {
                    echo $this->Html->link('Deconnexion', '/users/logout', ['class' => 'amber darken-1 bold']);
                } else {
                    echo $this->Html->link('Connexion', '/users/login', ['class' => 'amber darken-1 bold']);
                }
                ?>
            </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
    </div>
</nav>
