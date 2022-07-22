<?php

Kirby::plugin('and-she-was-wearing-trousers/break-block', [
  'blueprints' => [
    'blocks/break' => __DIR__ . '/blueprints/blocks/break.yml'
  ],
  'snippets' => [
    'blocks/break' => __DIR__ . '/snippets/blocks/break.php'
  ]
]);
