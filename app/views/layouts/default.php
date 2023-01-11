<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $this->siteTitle(); ?></title>

    <?= $this->content('head'); ?>

    <link rel='stylesheet' href="<?= PROOT ?>css/custom.css?v=<?php echo time(); ?>" media="screen" title="no title" charset="utf-8">
    <link rel='stylesheet' href="<?= PROOT ?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

    <script src="<?= PROOT ?>js/bootstrap.min.js" charset="utf-8"></script>
</head>

<body>

    <?= $this->content('body') ?>
</body>

</html>