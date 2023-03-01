<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->css(['materialize','style']) ?>
    <?= $this->fetch('css'); ?>
    </head>
<body>

<?= $this->fetch('content') ?>
<?= $this->Flash->render() ?>

</body>

<?= $this->Html->script(['https://code.jquery.com/jquery-2.1.1.min.js','materialize.js','init.js']) ?>
<?= $this->fetch('script'); ?>

</html>