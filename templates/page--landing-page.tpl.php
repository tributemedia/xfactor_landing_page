<?php
/**
 * In order for this file to work, you need to create a content type that has a machine name of landing_page
 * You'll need to make sure you have at least two fields for the form to be able to be stacked/side by side and for the navigation to be removed
 * Note: the philosophy of the navigation being removed is from Hubspot's Inbound that a landing page should not have a navigation bar.
 *    field machine name:   field_remove_navigation
 *    widget type:          select list
 *    Allowed Values List:  navigation|Navigation
 *                          no-navigation|No-Navigation
 *    Make required:        yes
 *
 *    field machine name:   field_form_stacked
 *    widget type:          select list
 *    Allowed Values List:  navigation|Navigation
 *                          no-navigation|No-Navigation
 *    Make required:        yes
 *    
 *    Of course, you'll want to have the webform module installed and enabled for this new content type. You'll also want to make sure that you remove them from the display in the content type settings so you don't see these fields being inappropriate.
 */
?>

<div id="top" class="materialize d7 landing-page <?php if ($node->field_remove_navigation): ?><?php print $node->field_remove_navigation['und'][0]['value']; ?><?php endif; ?> <?php if ($node->field_form_stacked): ?><?php print $node->field_form_stacked['und'][0]['value']; ?><?php endif; ?><?php print ' '.$bento_classes; print ' '; print $bento_dark; print ' '; print $bento_dark_b; print ' '; print $bento_bp; print ' '; print $bento_bc; print ' '; print $bento_br;?>">
  <div class="page">
    <div class="page-inner">
        
      <div class="top-wrapper w-navigation">
        <div class="top-wrapper wo-navigation">

          <?php if (!empty($page['help'])): ?>
            <div id="help-wrapper" class="help-wrapper">
              <div class="inner">
                <div id="help-container" class="container">
                  <div class="inner">
                    <?php print render($page['help']); ?>
                  </div>
                </div> <!-- #help-container -->
              </div> 
            </div> <!-- .help-wrapper -->
          <?php endif; ?>
					
          <?php if (!empty($breadcrumb)): ?>
					<div class="breadcrumb-wrapper wrapper <?php print $bento_m_dark; ?>">
						<div class="breadcrumb-wrapper-inner">
							<div id="breadcrumb-container" class="container">
								<div id="breadcrumb" class="region clearfix" >
									<div class="inner">
										<?php print $breadcrumb; ?>
									</div> <!-- .inner -->
								</div> <!-- #breadcrumb -->
							</div> <!-- #breadcrumb-container -->
						</div> <!-- .breadcrumb-wrapper-inner -->
					</div> <!-- .breadcrumb-wrapper -->
					<?php endif; ?>
          
					<?php if ($secondary_menu): ?>
					<div id="secondary-wrapper" class="secondary-wrapper wrapper <?php print $bento_m_dark; ?>">
						<div id="secondary-container" class="container <?php print $bento_bcs;?>">
							<div class="inner">
								<div id="secondary-navigation" class="secondary-navigation <?php if ($page['drawer']): ?>drawer-nav<?php endif;?>">
									<div class="inner-inner">
										<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
									</div> <!--.inner-inner -->
								</div> <!--#secondary-navigation -->
							</div> <!-- .inner -->
						</div> <!-- #secondary-container -->
					</div> <!-- #secondary-wrapper -->
					<?php endif; ?>
                  
          <header id="header-wrapper" class="header-wrapper wrapper <?php print $bento_header_dark; print ' '; print $bento_bph; ?>" role="banner">
            <div class="header-wrapper-inner">
              <div id="header-container" class="container <?php print $bento_bch;?>">
                <div class="header-inner row">
                  
                  <!-- branding -->
                  <div id="site-info" class="site-info col s11 m3 col-xs-12 col-sm-5 col-lg-4">
                    <div class="inner">
                         <?php if ($logo): ?><div class="logo"><a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a></div> <!-- .logo --><?php endif; ?>
     											<?php if (!empty($site_name)): ?>
     											<div class="site-name">	
     												<a class="name ol-xs-5" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
     											</div> <!-- .site-name -->
     											<?php endif; ?>

     											<?php if (!empty($site_slogan)): ?>
     											<div class="site-slogan">	
     												<span class="slogan ol-xs-5"><?php print $site_slogan; ?></span>
     											</div> <!-- .site-slogan -->	
     											<?php endif; ?>
                    </div> <!-- .inner -->
                  </div> <!-- .site-info -->
                  
                  <!-- header block -->
                  <div id="header" class="header-region region col s12 m8 hide-on-med-and-down <?php print $bento_brh;?> col-xs-12 col-sm-7 col-lg-8">
                    <div class="inner">
                      <?php print render($page['header']); ?>
                    </div>
                  </div> <!-- #header -->
                  
                </div> <!-- .header-inner -->
              </div> <!-- #header-container -->
            </div> <!-- .header-wrapper-inner -->
          </header> <!-- #header-wrapper -->
          
        </div> <!-- .top-wrapper .wo-navigation-->
        
        <?php if ($main_menu): ?>
  				<nav id="main-navigation-wrapper" class="main-navigation-wrapper wrapper desktop <?php print $bento_m_dark; ?>">
  					<div id="main-navigation" class="main-navigation container ">
  						<div class="inner">
  		                    <?php print render($main_menu_expanded); ?>
  						</div> <!-- .inner -->
  					</div> <!-- .main-navigation -->
  				</nav> <!-- .main-navigation-wrapper -->
        <?php endif; ?> <!-- end main menu -->
        
        
        
        
      </div> <!-- .top-wrapper .w-navigation-->



      
      <div id="content-area-wrapper" class="content-area-wrapper <?php print $bento_cw_dark; ?>">
        
				<?php if ($page['preface']): ?>
				<section id="preface-wrapper" class="preface-wrapper wrapper <?php print $bento_pre_dark; print ' '; print $bento_bppre; ?>">
					<div id="preface-container" class="container<?php print $bento_fluid;?> <?php print $bento_bcpre;?>">
						<div id="preface" class="region <?php print $bento_brpre;?> clearfix">
							<div class="inner">
								<?php print render($page['preface']); ?>
							</div><!-- .inner -->
						</div> <!-- #preface -->
					</div>  <!-- #preface-container -->
				</section>
				<?php endif; ?>
        
        
        
        <div id="content-wrapper" class="content-wrapper wrapper">
          <div class="inner">
            <div id="content-container" class="container <?php print $bento_bcc;?>">
              <div class="inner row">
                
                <main class="content-region <?php print $bento_c_dark; ?> col s12<?php if (!empty($page['sidebar_second'])): ?> m9<?php endif; ?>" role="main">
                  <a id="main-content"></a>
                    <div class="inner">
                      <div class="layout-content">
                        <?php if (!empty($tabs)): ?>
                          <?php print render($tabs); ?>
                        <?php endif; ?>

                        <?php print render($title_prefix); ?>
                
                        <?php if (!empty($title)): ?>
                          <h1 class="page-header title"><?php print $title; ?></h1>
                        <?php endif; ?>
                
                        <?php print render($title_suffix); ?>
                
                        <?php print $messages; ?>

                        <?php if (!empty($action_links)): ?>
                          <ul class="action-links"><?php print render($action_links); ?></ul>
                        <?php endif; ?>
                
                        <?php print render($page['content']); ?>
                
                        <?php if(!empty($feed_icons)): ?>
                          <div class="rssFeed"><?php print $feed_icons; ?></div>
                        <?php endif; ?>
                    </div><!-- .layout-content -->
                  </div>
                </main> <!-- .content-region -->
              
                  <?php if (!empty($page['sidebar_second'])): ?>
                    <aside class="sidebar-second sidebar region <?php print $bento_sr_dark; print ' '; print $bento_bpside; print ' '; print $bento_brside; ?> layout-sidebar-second col s12 m3" role="complementary">
                      <div class="inner">
                        <?php print render($page['sidebar_second']); ?>
                      </div> <!-- .inner -->
                    </aside>  <!-- #sidebar-second -->
                  <?php endif; ?>
              
                </div> <!-- inner row --> 
              </div> <!-- #content-container -->
            </div>
          </div> <!-- #content-wrapper -->
        </div>
      </div><!-- #content-area-wrapper -->
      
      <?php if ($page['postscript']): ?>
        <section id="postscript-wrapper" class="postscript-wrapper wrapper <?php print $bento_post_dark; print ' '; print $bento_bppost; ?>">
          <div class="inner">
            <div id="postscript-container" class="container <?php print $bento_bcpost;?>">
              <div id="postscript" class="region <?php print $bento_brpost;?> clearfix">
                <div class="inner row">
                <?php print render($page['postscript']); ?>
                </div><!-- .inner -->
              </div> <!-- #postscript -->
            </div>  <!-- #postscript-container -->
          </div>
        </section>
      <?php endif; ?>

        <footer class="footer-outer <?php print $bento_f_dark; print ' '; print $bento_bppost; ?>">
          <div class="inner">
            
				<?php if ($page['footer']): ?>
				<div id="footer-wrapper" class="footer-wrapper wrapper">
					<div class="footer-wrapper-inner">
						<div id="footer-container" class="container <?php print $bento_bcf;?>">
							<div id="footer" class="region <?php print $bento_brf;?> clearfix" >
								<div class="inner">
									<?php print render($page['footer']); ?>
								</div> <!-- .inner -->
							</div> <!-- #footer -->
						</div> <!-- #footer-container -->
					</div> <!-- .footer-wrapper-inner -->
				</div> <!-- .footer-wrapper -->
				<?php endif; ?>
				<div id="footer-information" class="footer-information-wrapper wrapper">
					<div class="footer-information-wrapper-inner">
						<div id="footer-information-container" class="container <?php print $bento_bcf;?>">
							<div id="footer-information" class="region <?php print $bento_brf;?> clearfix" >
								<div class="inner">
									<div>&copy;<?php echo date("Y"); print ' '; print $site_name; ?></div>

									<?php if ($page['information']): ?>
										<?php print render($page['information']); ?>
									<?php endif; ?>
								</div> <!-- .inner -->
							</div> <!-- #footer-information -->
						</div> <!-- #footer-information-container -->
					</div> <!-- .footer-information-wrapper-inner -->
				</div> <!-- .footer-information-wrapper -->
				<div id="attribution-line" class="attribution-wrapper wrapper">
					<div id="attribution-container" class="container <?php print $bento_bcf;?>">
						<div class="inner">
							<div class="attribution-line-inside brf <?php print $bento_bra;?>">
								<div class="inner-inner">
									powered by Tribute Media - a <a href="http://www.tributemedia.com" target="_new" alt>web design &amp; marketing agency</a>.<?php if (!$logged_in) { 
									print $login_link;
									} ?>
								</div>
							</div>
						</div>
					</div>
				</div><!-- #attribution-line -->
        
      </div> <!-- .footer-outer-inner -->
    </footer> <!-- .footer-outer -->
    
    
    <?php if (!empty($page['mob'])): ?>
                <?php print render($page['mob']); ?>

    <?php endif; ?>
    
      
    </div> <!-- .page-inner -->
    
    
  </div> <!-- .page -->
</div> <!-- .materialize -->



