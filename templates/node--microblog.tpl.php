<?php
// $Id$
/**
 * @file
 * Output for nodes.
 */

hide($content['comments']);
hide($content['links']);
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if(!empty($user_picture) || !$page || (!empty($submitted) && $display_submitted)): ?>
  <header class="clearfix">
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php if ($display_submitted): ?>
      <span class="meta" role="contentinfo"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php if (!empty($content['field_tags'])): ?>
      <?php print render($content['field_tags']);  ?>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <div class="content clearfix">
    <?php print render($content); ?>
  </div>
</article>

<?php if ($content['comments'] && $page): ?>
<section class="comments">
  <?php print render($content['comments']); ?>
</section>
<?php endif; ?>
