<?php

/**
 * @file
 *   islandora-newspaper-page.tpl.php
 *   This is the template file for the object page for newspaper
 *   This override adds a print.
 */
?>
<div class="islandora-newspaper-object islandora">
  <?php print manidora_print_insert_link("print/islandora/object/{$islandora_object->id}"); ?>
  <?php if ($newspaper_controls): ?>
    <div class="islandora-newspaper-controls">
      <?php print $newspaper_controls; ?>
    </div>
  <?php endif; ?>
  <div class="islandora-newspaper-content-wrapper clearfix">
    <?php if ($islandora_content): ?>
      <div class="islandora-newspaper-content">
        <?php print $islandora_content; ?>
      </div>
    <?php endif; ?>
    <div class="islandora-newspaper-sidebar">
      <?php if (!empty($dc_array['dc:description']['value'])): ?>
        <h2><?php print $dc_array['dc:description']['label']; ?></h2>
        <p><?php print $dc_array['dc:description']['value']; ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
