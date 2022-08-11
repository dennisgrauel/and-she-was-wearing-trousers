<nav>
  <a id="about-open" href="javascript:void(0)">About</a>, <a id="text-open" href="javascript:void(0)">Text</a>
</nav>

<div id="nav-texts-panel" aria-hidden="true">
  <?php $texts = $site->children()->listed()->template("work") ?>
  <div class="panel-heading">
    <a class="panel-close" id="text-close" href="javascript:void(0)">(close)</a>
    <span>Text</span>
  </div>

  <?php foreach ($texts as $text): ?>
    <a href="<?= $text->url() ?>">
      <h2 class="nav-contributor"><?= $text->contributor() ?></h2>
      <h1 class="nav-text"><?= $text->title() ?></h1>
    </a>
  <?php endforeach ?>

</div>

<div id="about-panel" aria-hidden="true">
  <div class="panel-heading">
    <a class="panel-close" id="about-close" href="javascript:void(0)">(close)</a>
    <span>About</span>
  </div>
  <div class="about">
    <?= page('Home')->about()->toBlocks() ?>
    <br>
    <?php if(page('Home')->contributors()->isNotEmpty()): ?>
      <?= page('Home')->contributors()->toBlocks() ?>
    <?php endif ?>
  </div>
</div>
