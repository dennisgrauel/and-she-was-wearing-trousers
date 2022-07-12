<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>

  <?php $backgroundColor = $page->color() ?>

  <body data-background-color="<?= $backgroundColor ?>">
    <?= snippet('nav') ?>
    <?= snippet('title') ?>

    <h2 class="work-contributor"><?= $page->contributor() ?></h2>
    <h1 class="work-title"><?= $page->title() ?></h1>

    <?= snippet('work-body') ?>

    <?= js('assets/js/nav.js') ?>

  </body>
</html>
