<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Database\StatementInterface $error
 * @var string $message
 * @var string $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

$errorTitle = 'Erreur ' . $this->fetch('error'); // titre de la page

$this->assign('title', $errorTitle); // définition du titre
?>
<h1>Erreur 400 :</h1>
<h2>ressource demandée indisponible, le serveur n'arrive pas à la trouver</h2>
