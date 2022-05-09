<?php date_default_timezone_set("Australia/Melbourne") ?>
<?php $aest = date("H:i") ?>
<?php date_default_timezone_set("Africa/Johannesburg") ?>
<?php $sast = date("H:i") ?>

<header>
  <div class="timestamp">
    <?= $aest ?> Kulin Nation — <?= $sast ?> South Africa
  </div>

</header>
