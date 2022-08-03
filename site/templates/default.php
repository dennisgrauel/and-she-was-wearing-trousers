<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->title() ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
  </head>
  <body class="home">
    <div class="landing">

      <?php $triangle = $site->page('Home')->file('triangle.svg')->url() ?>
      <img src="<?= $triangle ?>" alt="" class="triangle" id="tri-1">
      <img src="<?= $triangle ?>" alt="" class="triangle" id="tri-2">
      <img src="<?= $triangle ?>" alt="" class="triangle" id="tri-3">
      <img src="<?= $triangle ?>" alt="" class="triangle" id="tri-4">

      <div class="landing-content">
        <div class="">
          <?= snippet('nav') ?>
          <?= snippet('title') ?>

          <div class="artists">
            <?php $artists = $site->children()->published() ?>

            <?php foreach ($artists as $artist): ?>
              <?php if ($artist->intendedTemplate() == 'artist'): ?>
                <?php $url = ($artist->isListed()) ? $artist->url() : "javascript:void(0)" ?>
                <a href="<?= $url ?>">
                  <h2 class="artist"><?= $artist->title() ?></h2>
                </a>
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
        <?= page('Home')->acknowledgement()->kti() ?>
      </div>

    </div>

    <div class="about">
      <?php $aboutlimit = page('Home')->aboutlimit()->toInt() ?>
      <?= page('Home')->about()->toBlocks()->limit($aboutlimit) ?>

      <?php $catalogue = $site->page('Home')->file('and-she-was-wearing-trousers-a-call-to-our-heroines-catalogue.pdf')->url() ?>
      <?php $moreinfo = (page('Home')->moreinfo()->toBool() === true ? '' : 'hidden') ?>
      <a class="<?= $moreinfo ?>" id="about-cont" href="javascript:void(0)">(More info)</a>
    </div>
    <br>
    <div class="about">
      <p>A PDF of the exhibition catalogue can be downloaded <a href="<?= $catalogue ?>" target="_blank">here</a>.</p>
    </div>


    <div class="events">
      <h2>Events</h2>
      <div class="events-table">
        <?php $events = $site->children()->listed() ?>
        <?php foreach ($events as $event): ?>
          <?php if ($event->intendedTemplate() == 'event'): ?>
            <?php $isExpandable = 0; ?>
            <?php if ($event->description()->isNotEmpty()): ?>
              <?php $isExpandable = 1; ?>
            <?php endif ?>
            <div class="event-row" data-expandable="<?= $isExpandable ?>">
              <div class="event-item">
                <?= $event->title() ?>
              </div>
              <div class="event-item">
                <span class="event-time"><?= $event->time()->toBlocks() ?></span>
                <span class="event-location"><?= $event->venue() ?></span>
              </div>
              <div class="event-item">
                <?php if ($event->booking()->isNotEmpty()): ?>
                  <?php $linkText = ($event->linktext()->isNotEmpty()) ? ($event->linktext()) : ('Book Here') ?>
                  <a href="<?= $event->booking() ?>" target="_blank"><?= $linkText ?></a>
                <?php endif ?>
              </div>
              <?php if ($event->description()->isNotEmpty()): ?>
                <div class="event-description">
                  <?= $event->description()->toBlocks() ?>
                </div>
              <?php endif ?>

            </div>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>

    <footer>
      <?= $site->page('Home')->footer()->kti() ?><br>
      <img class="sponsor-logo" src="<?= page('Home')->file('aca_logo_horizontal_black_medi-543229c977efb.png')->url() ?>" alt="Australia Council for the Arts logo">
      <img class="sponsor-logo" src="<?= page('Home')->file('creative-vic-black.svg')->url() ?>" alt="Creative Victoria logo">

    </footer>

    <?= js('assets/js/patterns.js') ?>
    <?= js('assets/js/nav.js') ?>
    <?= js('assets/js/events.js') ?>

  </body>
</html>
