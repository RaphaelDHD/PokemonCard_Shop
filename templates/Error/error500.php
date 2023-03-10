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
<h1> Erreur 500 : </h1>
<h2> la requête envoyée par le navigateur n'a pas pu être traitée pour une raison qui n'a pas pu être identifiée </h2>
