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

    <main>

      <?php if ($page->intro()->isNotEmpty()): ?>
        <div class="work-intro">
          <?= $page->intro() ?>
        </div>
      <?php endif ?>

      <div class="work-body">
        <?= $page->body()->toBlocks() ?>
      </div>

      <?php if ($page->bio()->isNotEmpty()): ?>
        <div class="work-bio">
          <?= $page->bio()->toBlocks() ?>
        </div>
      <?php endif ?>

      <?php if ($page->notes()->isNotEmpty()): ?>
        <div class="notes">
          <?= $page->notes() ?>
        </div>
      <?php endif ?>

    </main>

  </body>
</html>
