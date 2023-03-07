<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Pokemon TradingSite</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->css(['materialize','style']) ?>
    <?= $this->fetch('css'); ?>
    <?= $this->fetch('js'); ?>
</head>
<body>

<?= $this->element("front/header") ?>

<?= $this->fetch('content'); ?>
<?= $this->element("front/footer") ?>

<!--  Scripts-->
<?= $this->Html->script(['https://code.jquery.com/jquery-2.1.1.min.js','materialize.js','init.js']) ?>
<?= $this->fetch('script'); ?>
