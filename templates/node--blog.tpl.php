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
  <header class="clearfix<?php $user_picture ? print ' with-picture' : ''; ?>">
    <?php print $user_picture; ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php if ($display_submitted): ?>
      <span class="meta"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php if (!empty($content['field_tags'])): ?>
      <?php print render($content['field_tags']);  ?>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <div class="content clearfix">
  <div class="right-column blog-right-box">
    <div class="right-column col-2 blog-image">
      <?php //print render($content['field_image']); ?>
      <?php print views_embed_view('blog_slideshow', $display_id = 'default', $nid); /*Embeds Slideshow View and passed $tid for term*/  ?>
    </div>
  </div>
    <?php print render($content); ?>
  </div>
  <?php if (!empty($content['links'])): ?>
    <footer>
      <nav class="links">
        <?php print render($content['links']); ?>
      </nav>
    </footer>
  <?php endif; ?>
</article>

<?php if ($content['comments'] && $page): ?>
<section class="comments">
  <?php print render($content['comments']); ?>
</section>
<?php endif; ?>
