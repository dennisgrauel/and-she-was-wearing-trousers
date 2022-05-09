<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $site->title() ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <?php snippet('header') ?>
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
                  <img src="<?= $artist->pattern() ?>" class="pattern">
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
      <div class="acknowledgement">
        <?= $site->page('Home')->acknowledgement()->kti() ?>
      </div>
    </div>



    <div class="about">
      <?= $site->page('Home')->about()->toBlocks() ?>
    </div>

    <div class="events">
      <h2>Events</h2>
      <div class="events-table">
        <?php $events = $site->children()->listed() ?>
        <?php foreach ($events as $event): ?>
          <?php if ($event->intendedTemplate() == 'event'): ?>
            <div class="event-row">
              <div class="event-name">
                <?= $event->title() ?>
              </div>
              <div class="event-details">
                <span class="event-time"><?= $event->time() ?></span>
                <span class="event-location"><?= $event->venue() ?></span>
              </div>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>

    <footer>
      <?= $site->page('Home')->footer()->kti() ?><br>
      <?php $sponsors = $site->page('Home')->files() ?>
      <?php foreach ($sponsors as $sponsor): ?>
        <img class="sponsor-logo" src="<?= $sponsor->url() ?>" alt="">
      <?php endforeach ?>
    </footer>

  </body>
</html>
