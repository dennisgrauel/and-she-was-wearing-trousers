<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
  </head>
  <body>
    <div class="landing">
      <div class="landing-content">
        <div class="">
          <div class="title">
            <h1>
              <span>And she was</span><br>
              <span>wearing trousers:</span><br>
              <span id="subtitle"><?= $page->subtitle() ?></span>
            </h1>
          </div>

          <div class="artists">
            <?php $artists = $site->children()->listed() ?>
            <?php foreach ($artists as $artist): ?>
              <?php if ($artist->intendedTemplate() == 'artist'): ?>
                <div>
                  <h2 class="artist"><?= $artist->title() ?></h2>
                  <?php if ($artist->pattern()->isNotEmpty()): ?>
                    <img class="pattern" src="<?= $artist->pattern() ?>">
                  <?php endif ?>
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>

        <div class="byline">
          <?php $bylines = $site->page('Home')->byline()->kti() ?>
          <?php foreach ($bylines as $byline): ?>
            <h3><?= $byline ?></h3>
          <?php endforeach ?>
        </div>
      </div>

      <div class="pattern-container">

        <?php $triangle = $site->page('Home')->file('triangle.svg')->url() ?>
        <img src="<?= $triangle ?>" alt="" class="triangle draggable" id="tri-1">
        <img src="<?= $triangle ?>" alt="" class="triangle draggable" id="tri-2">
        <img src="<?= $triangle ?>" alt="" class="triangle draggable" id="tri-3">
        <img src="<?= $triangle ?>" alt="" class="triangle draggable" id="tri-4">
      </div>

      <div class="acknowledgement">
        <?= $site->page('Home')->acknowledgement()->kti() ?>
      </div>
    </div>

    <div class="about">
      <?= $site->page('Home')->about()->toBlocks() ?>

      <?php $catalogue = $site->page('Home')->file('and-she-was-wearing-trousers-a-call-to-our-heroines-catalogue.pdf')->url() ?>
      <br>
      <p>A PDF of the exhibition catalogue can be downloaded <a href="<?= $catalogue ?>" target="_blank">here</a>.</p>
    </div>

    <div class="events">
      <h2>Events</h2>
      <div class="events-table">
        <?php $events = $site->children()->listed() ?>
        <?php foreach ($events as $event): ?>
          <?php if ($event->intendedTemplate() == 'event'): ?>
            <div class="event-row">
              <div class="event-item">
                <?= $event->title() ?>
              </div>
              <div class="event-item">
                <span class="event-time"><?= $event->time()->toBlocks() ?></span>
                <span class="event-location"><?= $event->venue() ?></span>
              </div>
              <div class="event-item">
                <?php if ($event->booking()->isNotEmpty()): ?>
                  <a href="<?= $event->booking() ?>" target="_blank">Book Here</a>
                <?php endif ?>
              </div>

            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>

    <footer>
      <?= $site->page('Home')->footer()->kti() ?><br>
      <?php $sponsors = $site->page('Home')->files()->sorted()->limit(2) ?>
      <?php foreach ($sponsors as $sponsor): ?>
        <img class="sponsor-logo" src="<?= $sponsor->url() ?>" alt="">
      <?php endforeach ?>
    </footer>

    <?= js('assets/js/patterns.js') ?>

  </body>
</html>
