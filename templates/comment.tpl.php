<?php
// $Id$
/**
 * @file
 * Output for comments.
 */
?>
<?php if($variables['node']->type == "microblog"): ?>
<?php hide($content['links']); ?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner">
    <p class="meta"><?php print $submitted; ?></p>
    <header>
      <?php if ($new): ?><span class="new"><?php print $new; ?></span><?php endif; ?>
      <?php print render($title_prefix); ?>
      <h3<?php print $title_attributes; ?>><?php print render($content); ?></h3>
      <?php print render($title_suffix); ?>
    </header>
    <?php if ($content['links']): ?>
    <footer>
    <div class="links comment-links">
      <?php print render($content['links']) ?>
    </div>
    </footer>
    <?php endif; ?>
  </div>
</article>
<?php endif; ?>
<?php if($variables['node']->type != "microblog"): ?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner">
    <header>
      <?php if ($new): ?><span class="new"><?php print $new; ?></span><?php endif; ?>
      <?php print render($title_prefix); ?>
      <h3<?php print $title_attributes; ?>><?php print $title; ?> <span><?php print $permalink; ?></span></h3>
      <?php print render($title_suffix); ?>
      <p class="meta"><?php print $submitted; ?></p>
    </header>
    <div class="content"<?php print $content_attributes; ?>>
      <?php print render($content); ?>
      <?php if ($signature): ?>
      <aside class="user-signature clearfix">
        <?php print $signature;  ?>
      </aside>
      <?php endif; ?>
    </div>
    <?php if ($content['links']): ?>
    <footer>
      <div class="links comment-links">
        <?php print render($content['links']) ?>
      </div>
    </footer>
    <?php endif; ?>
  </div>
</article>
<?php endif; ?>
