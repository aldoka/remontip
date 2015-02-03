<?php

?>
<div id="page-wrapper" class="extra"><div class="main" id="page">

  <header>
    <div class="indent <?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
      <div class="row-top">
        <div class="wrapper">
          <p class="h1">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              <?php print $site_name; ?>
            </a>
          <?php endif; ?>
          </p>
          <strong class="support">+375 29 709-53-41</strong>
        </div>
      </div>

      <?php print render($page['header']); ?>

      <nav lang="<?php print $language->language; ?>">
        
        <?php if ($main_menu): ?>
          <div class="center_1">
            <div class="center_2">
              <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'main-menu-links',
                  'class' => array('links', 'clearfix', 'menu'),
                ),
              )); ?>
            </div>
          </div>
        <?php endif; ?>
      </nav>

      <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>

    </div>

    <?php if ($is_front):?>
    <div class="wrapper">
      <div class="slider">
        <ul class="items">
          <li><img src="/sites/all/themes/remontip/images/slider-img1.jpg" alt=""></li>
          <li><img src="/sites/all/themes/remontip/images/slider-img2.jpg" alt=""></li>
          <li><img src="/sites/all/themes/remontip/images/slider-img3.jpg" alt=""></li>
        </ul>
      </div>
      <a class="prev">пред.</a> <a class="next">след.</a>
      <div class="banner1-bg"></div>
      <div class="banner-1"></div>
    </div>
    <?php endif;?>
  </header> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <section id="content">
      <div class="wrapper">
          <?php if ($page['sidebar_second']): ?>
            <article class="col-1">
                <div class="indent-left">
                  <?php if ($title): ?>
                    <h1 class="title p1" id="page-title">
                      <?php print $title; ?>
                    </h1>
                  <?php endif; ?>

                  <?php if ($action_links): ?>
                    <ul class="action-links">
                      <?php print render($action_links); ?>
                    </ul>
                  <?php endif; ?>

                  <?php print render($page['content']); ?>
                </div>
            </article>
            <article class="col-2">
              <?php print render($page['sidebar_second']); ?>
            </article>
          <?php else: ?>
            <?php if ($title): ?>
              <h1 class="title p1" id="page-title">
                <?php print $title; ?>
              </h1>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
          <?php endif; ?>

      </div>
  </section>

</div></div> <!-- /#page, /#page-wrapper -->

  <footer>
    <div class="main">
      <div class="footer-bg">
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
      </div>
    </div>
  </footer>  