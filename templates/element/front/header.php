<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/pokemon_logo.png"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Boutique</a></li>
            <li><a href="#">Mes cartes</a></li>
            <li>
                <?= $this->Html->link('Deconnexion', '/users/logout',['class' => 'amber darken-1 bold']) ?>
            </li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Boutique</a></li>
            <li><a href="#">Mes cartes</a></li>
            <li><a href="#">Deconnexion</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>