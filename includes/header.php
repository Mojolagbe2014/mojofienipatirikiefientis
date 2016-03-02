    <header class="top_panel_wrap top_panel_style_3 scheme_original">
        <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
            <div class="top_panel_top">
                <div class="content_wrap clearfix">
                    <div class="top_panel_top_contact_phone icon-phone"><?php echo COMPANY_HOTLINE; ?></div>
                    <div class="top_panel_top_open_hours icon-clock"><?php echo strip_tags(COMPANY_OPEN_HOURS); ?></div>
                    <div class="top_panel_top_contact_email">
                        <a class="__cf_email__" href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                    </div>
                    <div class="top_panel_top_user_area">   <ul id="menu_user" class="menu_user_nav"> </ul> </div>					
                </div>
            </div>

            <div class="top_panel_middle" >
                <div class="content_wrap">
                    <div class="columns_wrap columns_fluid">
                        <div class="column-1_3 contact_logo">
                            <div class="logo">
                                <a href="<?php echo SITE_URL; ?>"><img src="images/logo.jpg" class="logo_main" alt="" width="182" height="48"><img src="images/logo.jpg" class="logo_fixed" alt="" width="182" height="48"><div class="logo_slogan">Vien Patrick Events</div></a>
                            </div>
                        </div><div class="column-2_3 menu_main_wrap">
                            <a href="#" class="menu_main_responsive_button icon-menu"></a>
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li id="menu-item-792" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $thisPage->active($_SERVER['SCRIPT_NAME'], 'index', 'current-menu-item  current_page_item'); ?> menu-item-792"><a href="<?php echo SITE_URL; ?>">Home</a></li>
                                    <li id="menu-item-124" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $thisPage->active($_SERVER['SCRIPT_NAME'], 'events.php', 'current-menu-item  current_page_item'); ?> menu-item-124"><a href="<?php echo SITE_URL."events/"; ?>">Events</a></li>
                                <li id="menu-item-1313" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $thisPage->active($_SERVER['REQUEST_URI'], 'about', 'current-menu-item  current_page_item'); ?> menu-item-1313"><a href="<?php echo SITE_URL."about/"; ?>">About</a></li>
                                <li id="menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $thisPage->active($_SERVER['REQUEST_URI'], 'services', 'current-menu-item  current_page_item'); ?> menu-item-1399"><a href="<?php echo SITE_URL."services/"; ?>">Services</a></li>
                                <li id="menu-item-804" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo $thisPage->active($_SERVER['REQUEST_URI'], 'gallery', 'current-menu-item  current_page_item'); ?> menu-item-804"><a href="<?php echo SITE_URL."gallery/"; ?>">Gallery</a></li>
                                <li id="menu-item-1578" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo $thisPage->active($_SERVER['REQUEST_URI'], 'contact', 'current-menu-item  current_page_item'); ?> menu-item-1578"><a href="<?php echo SITE_URL."contact/"; ?>">Contact Us</a></li>
                                </ul>							
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>