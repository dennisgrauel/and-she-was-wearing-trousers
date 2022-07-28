<?php $class = ($block->size() == 'small') ? ('small-text') : ('') ?>

<p class="<?= $class ?>">
  <?= $block->text()->inline() ?>
</p>
