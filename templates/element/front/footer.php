<footer class="page-footer fixedBottom">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Pokemon Trading card</h5>
                <p class="grey-text text-lighten-4">Nous sommes deux étudiants qui avons eu pour projet de réaliser un site avec cakePhp sur le thème des cartes Pokemon.</p>


            </div>
            <div class="col l3 s12">
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Liens utiles</h5>
                <ul>
                    <li>
                        <?= $this->Html->link('Boutique', '/shop' , ['class' => 'white-text']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Mes cartes', '/', ['class' => 'white-text']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('Deconnexion', '/users/logout', ['class' => 'white-text']) ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="black-text text-lighten-3"> Raphael et Zacharie </a>
        </div>
    </div>
</footer>