<?php
// $Id$
/**
 * @file
 * Output for main HTML page content.
 */
?>
<div id="container" class="container-16">
  <header id="header" class="section section-header clearfix" role="header">
    <?php if ($site_name || $site_slogan): ?> <!-- Finish making header_left and header_right full regions -->
      <hgroup class="grid-10">
        <div id="header-logo">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
        <div id="header-right">
          <?php /*Make full region*/ ?>
        </div>
        <div id="header-left">
          <?php if ($site_name): ?>
            <h1 class="site-name"><a title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </div>
      </hgroup>
    <?php endif; ?>
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>
  <?php print render($page['highlighted']); ?>
  <div id="main" class="section section-main clearfix">
    <div id="content" class="column <?php print $content_grid_classes; ?>">
      <div class="inner">
      <?php print $messages; ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if (!empty($tabs['#primary'])): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <div id="main-content" class="clearfix">
        <?php print render($page['content']); ?>
      </div>
      <?php print $feed_icons; ?>
    </div>
    </div>
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar <?php print $sidebar_first_grid_classes; ?>">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar <?php print $sidebar_second_grid_classes; ?>">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>
  </div>
  <?php print $breadcrumb; ?>
  <footer id="footer" class="section section-footer clearfix">
    <?php print render($page['footer']); ?>
    <?php print render($page['copyright']); ?>
  </footer>
</div>
<?php if ($page['collapsible']): ?>
  <section id="section-collapsible" class="section section-collapsible clearfix">
    <h2 class="collapsible-toggle"><a href="#"><?php print t('Toggle collapsible region'); ?></a></h2>
    <?php print render($page['collapsible']); ?>
  </section>
<?php endif; ?>
