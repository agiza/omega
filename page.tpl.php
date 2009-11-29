<?php
<<<<<<< HEAD:page.tpl.php
// $Id: page.tpl.php,v 1.6.2.5 2009/11/25 01:44:46 himerus Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
=======
// $Id: page.tpl.php,v 1.5 2009/07/08 20:07:31 himerus Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
>>>>>>> 63c9d0c1bc2fbe6086ea93a046fcff1c467e9bf0:page.tpl.php
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
  <?php if (!empty($admin)) print $admin; ?>
<<<<<<< HEAD:page.tpl.php
  <div id="page" class="clear-block">
    <div id="site-header" class="container-<?php print $branding_wrapper_width; ?> clear-block">
      <div id="branding" class="grid-<?php print $header_logo_width; ?>">
        <?php if ($linked_logo_img): ?>
          <?php print $linked_logo_img; ?>
        <?php endif; ?>
        <?php if ($linked_site_name): ?>
          <?php if ($title): ?>
            <h2 id="site-name" class=""><?php print $linked_site_name; ?></h2>
          <?php else: ?>
            <h1 id="site-name" class=""><?php print $linked_site_name; ?></h1>
          <?php endif; ?>
        <?php endif; ?>
      </div><!-- /#branding -->

      <?php if ($main_menu_links || $secondary_menu_links): ?>
        <div id="site-menu" class="grid-<?php print $header_menu_width; ?>">
          <div><?php print $main_menu_links; ?></div>
          <div><?php print $secondary_menu_links; ?></div>
        </div><!-- /#site-menu -->
      <?php endif; ?>
    </div><!-- /#site-header -->

    <?php if($header_first || $header_last): ?>
    <div id="header-regions" class="container-<?php print $header_wrapper_width; ?> clear-block">
      <?php if($header_first): ?>
        <div id="header-first" class="<?php print $header_first_classes; ?>">
          <?php print $header_first; ?>
        </div><!-- /#header-first -->
      <?php endif; ?>
      <?php if($header_last): ?>
        <div id="header-last" class="<?php print $header_last_classes; ?>">
          <?php print $header_last; ?>
        </div><!-- /#header-last -->
      <?php endif; ?>
    </div><!-- /#header-regions -->
    <?php endif; ?>
    
    <?php if($site_slogan && $is_front || $search_box || $breadcrumb): ?>
    <div id="internal-nav" class="container-<?php print $internal_nav_wrapper_width; ?> clear-block">
      <div id="slogan-bcrumb" class="grid-<?php print $breadcrumb_slogan_width; ?>">
        <?php if ($site_slogan && $is_front): ?>
          <div id="slogan"><?php print $site_slogan; ?></div><!-- /#slogan -->
        <?php endif; ?>
        <?php if($breadcrumb): ?>
          <div id="bcrumb"><?php print $breadcrumb; ?></div><!-- /#bcrumb -->
        <?php endif; ?>
      </div>
      <?php if ($search_box): ?>
        <div id="search-box" class="grid-<?php print $search_width; ?>"><?php print $search_box; ?></div><!-- /#search-box -->
      <?php endif; ?>
    </div><!-- /#internal-nav -->
    <?php endif; ?>
    
    <?php if($preface_first || $preface_middle || $preface_last): ?>
    <div id="preface-wrapper" class="container-<?php print $preface_wrapper_grids; ?>">
      <?php if($preface_first): ?>
        <div id="preface-first" class="preface <?php print $preface_first_classes; ?>">
          <?php print $preface_first; ?>
        </div><!-- /#preface-first -->
      <?php endif; ?>
      <?php if($preface_middle): ?>
        <div id="preface-middle" class="preface <?php print $preface_middle_classes; ?>">
          <?php print $preface_middle; ?>
        </div><!-- /#preface-middle -->
      <?php endif; ?>
      <?php if($preface_last): ?>
        <div id="preface-last" class="preface <?php print $preface_last_classes; ?>">
          <?php print $preface_last; ?>
        </div><!-- /#preface-last -->
      <?php endif; ?>
    </div><!-- /#preface-wrapper -->
    <?php endif; ?>
    
    <div class="container-<?php print $default_container_width; ?> clear-block">
      <div class="grid-<?php print $default_container_width; ?>">
        <?php print $help; ?><?php print $messages; ?>
      </div>
    </div><!-- /.container-xx -->

    <div id="main-content-container" class="container-<?php print $content_container_width; ?> clear-block">
      <div id="main-wrapper" class="column <?php print $main_content_classes; ?>">
        <?php print $mission; ?>
        <?php if($content_top): ?>
        <div id="content-top">
          <?php print $content_top; ?>
        </div><!-- /#content-top -->
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div id="content-tabs" class=""><?php print $tabs; ?></div><!-- /#content-tabs -->
        <?php endif; ?>
    
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
    
        <div id="main-content" class="region clear-block">
          <?php print $content; ?>
        </div><!-- /#main-content -->
        
        <?php if($content_bottom): ?>
        <div id="content-bottom">
          <?php print $content_bottom; ?>
        </div><!-- /#content-bottom -->
        <?php endif; ?>
      </div><!-- /#main-wrapper -->
    
      <?php if ($sidebar_first): ?>
        <div id="sidebar-first" class="column sidebar region <?php print $sidebar_first_classes; ?>">
          <?php print $sidebar_first; ?>
        </div><!-- /#sidebar-first -->
      <?php endif; ?>
    
      <?php if ($sidebar_last): ?>
        <div id="sidebar-last" class="column sidebar region <?php print $sidebar_last_classes; ?>">
          <?php print $sidebar_last; ?>
        </div><!-- /#sidebar-last -->
      <?php endif; ?>
    </div><!-- /#main-content-container -->
    
    <?php if($postscript_one || $postscript_two || $postscript_three || $postscript_four): ?>
    <div id="postscript-wrapper" class="container-<?php print $postscript_container_width; ?> clear-block">
      <?php if($postscript_one): ?>
        <div id="postscript-one" class="postscript <?php print $postscript_one_classes; ?>">
          <?php print $postscript_one; ?>
        </div><!-- /#postscript-one -->
      <?php endif; ?>
      <?php if($postscript_two): ?>
        <div id="postscript-two" class="postscript <?php print $postscript_two_classes; ?>">
          <?php print $postscript_two; ?>
        </div><!-- /#postscript-two -->
      <?php endif; ?>
      <?php if($postscript_three): ?>
        <div id="postscript-three" class="postscript <?php print $postscript_three_classes; ?>">
          <?php print $postscript_three; ?>
        </div><!-- /#postscript-three -->
      <?php endif; ?>
      <?php if($postscript_four): ?>
        <div id="postscript-four" class="postscript <?php print $postscript_four_classes; ?>">
          <?php print $postscript_four; ?>
        </div><!-- /#postscript-four -->
      <?php endif; ?>
    </div><!-- /#postscript-wrapper -->
    <?php endif; ?>
    
    <?php if($footer_first || $footer_last || $footer_message): ?>
    <div id="footer-wrapper" class="container-<?php print $footer_container_width; ?> clearfix">
      <?php if($footer_first): ?>
        <div id="footer-first" class="grid-<?php print $footer_first_classes; ?>">
          <?php print $footer_first; ?>
        </div><!-- /#footer-first -->
      <?php endif; ?>
      <?php if($footer_last || $footer_message): ?>
        <div id="footer-last" class="grid-<?php print $footer_last_classes; ?>">
          <?php print $footer_last; ?>
          <?php if ($footer_message): ?>
            <div id="footer-message">
              <?php print $footer_message; ?>
            </div><!-- /#footer-message -->
          <?php endif; ?>
        </div><!-- /#footer-last -->
      <?php endif; ?>
    </div><!-- /#footer-wrapper -->
    <?php endif; ?>
  </div><!-- /#page -->
  <?php print $closure; ?>
</body>
</html>
=======
  <div id="page" class="container-16 clear-block">
  
    <div id="site-header" class="grid-16 clear-block">
      
      <div id="branding" class="grid-<?php print $header_logo_width; ?> alpha">
      <?php if ($linked_logo_img): ?>
        <?php print $linked_logo_img; ?>
      <?php endif; ?>
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class=""><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      </div><!-- /#branding -->
    
      
      
    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-<?php print $header_wrapper_width; ?> omega">
        <div><?php print $main_menu_links; ?></div>
        <div><?php print $secondary_menu_links; ?></div>
      </div>
    <?php endif; ?>
    
    <?php print $header_first; ?>
    
    
    <?php print $header_last; ?>
    </div><!-- /#site-header -->

    <div id="internal-nav" class="grid-16">
      <div id="slogan-bcrumb" class="grid-10 alpha">
        <?php if ($site_slogan && $is_front): ?>
          <div id="slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
        <?php if($breadcrumb): ?>
          <div id="bcrumb"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
      </div>
      <?php if ($search_box): ?>
      <div id="search-box" class="grid-6 omega"><?php print $search_box; ?></div>
    <?php endif; ?>
      
    </div>

    <div id="preface-wrapper" class="grid-16">
      <?php print $preface_first; ?>
      <?php print $preface_middle; ?>
      <?php print $preface_last; ?>
    </div><!-- /preface-wrapper -->
    
    <div class="grid-16"><?php print $help; ?><?php print $messages; ?></div>
    <div>
    <div id="main-wrapper" class="column <?php print $main_content_classes; ?>">
      

	    <?php print $mission; ?>

      
      <div id="content-top">
        <?php print $content_top; ?>
      </div>
      
      <?php if ($tabs): ?>
        <div id="content-tabs" class=""><?php print $tabs; ?></div>
      <?php endif; ?>
      
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>

      <div id="main-content" class="region clear-block">
        <?php print $content; ?>
      </div>
      
      <div id="content-bottom">
        <?php print $content_bottom; ?>
      </div>
    </div>
    </div>
  <?php if ($sidebar_first): ?>
    <div id="sidebar-first" class="column sidebar region <?php print $sidebar_first_classes; ?>">
      <?php print $sidebar_first; ?>
    </div>
  <?php endif; ?>

  <?php if ($sidebar_last): ?>
    <div id="sidebar-last" class="column sidebar region <?php print $sidebar_last_classes; ?>">
      <?php print $sidebar_last; ?>
    </div>
  <?php endif; ?>


  <div id="postscript-wrapper" class="grid-16">
      <?php print $postscript_one; ?>
      <?php print $postscript_two; ?>
      <?php print $postscript_three; ?>
      <?php print $postscript_four; ?>
  </div><!-- /postscript-wrapper -->
  
  
  <div id="footer-first" class="grid-16 clear-block">
    <?php print $footer_first; ?>
  </div>
  <div id="footer-last" class="grid-16 clear-block">
    <?php print $footer_last; ?>
    <?php if ($footer_message): ?>
      <div id="footer-message">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
>>>>>>> 63c9d0c1bc2fbe6086ea93a046fcff1c467e9bf0:page.tpl.php
