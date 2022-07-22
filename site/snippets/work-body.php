<main>

  <?php if ($page->intro()->isNotEmpty()): ?>
    <div class="work-intro">
      <?= $page->intro()->kti() ?>
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
