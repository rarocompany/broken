<?php


if ( get_option('nicdark_theme_author') != 1 ){

  add_action('admin_menu', 'nd_options_create_themes_menu');
  function nd_options_create_themes_menu() {
    
    /*1*/
    add_menu_page( __('WP Themes','nd-shortcodes'), __('WP Themes','nd-shortcodes'), 'manage_options', 'nd-shortcodes-themes', 'nd_options_themes_menu_page', 'dashicons-cart' );

  }


  //START add custom css
  function nd_options_admin_style_for_theme_page() {
    
    wp_enqueue_style( 'nd_options_style_theme_page', esc_url( plugins_url( 'admin-style.css', __FILE__ ) ), array(), false, false );
    
  }
  add_action( 'admin_enqueue_scripts', 'nd_options_admin_style_for_theme_page' );
  //END add custom css




  /*1 - page*/
  function nd_options_themes_menu_page() {
  ?>


    
    <div class="wrap">
      
      <h1 class="nd_options_margin_bottom_15_important">
        <?php _e('Themes','nd-shortcodes'); ?>
        <span class="nd_options_margin_left_10 title-count theme-count">16</span>
      </h1>

      <div class="theme-browser rendered">
        <div class="themes wp-clearfix">


          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/carne.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/butcher/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Butcher</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/butcher/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/9WA7N5">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/pesce.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/seafood/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Seafood</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/seafood/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/DVyOAb">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/spyn.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/tennis/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Tennis Club</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/tennis/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/LPPP4a">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/ngo.jpeg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/donation/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">NGO Charity</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/donation/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/YOzLB">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->
          

          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/edile.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/construction/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Construction</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/construction/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/vr9zv">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->




          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/marina.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/resort/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Hotel Resort</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/resort/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/6Ko0q">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->




          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/ristorante.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Restaurant</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/PZ4ee">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->




          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/hotel-booking.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Hotel Booking</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/WLRW3">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/charity-foundation.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/charity/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Charity Foundation</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/charity/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/4YoO1">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/beauty-pack.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/beauty/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Beauty Pack</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/beauty/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/LG4ea">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/education-pack.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/education/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Education Pack</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/education/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/53YOn">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/camping-village.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/camping/wp/demo/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Camping Village</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/camping/wp/demo/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/OJ4GA">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/wedding-industry.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/wedding/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Wedding Industry</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/wedding/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/M1yaP">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/baby-kids.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/children/wp/demo/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Baby Kids</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/children/wp/demo/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://themeforest.net/item/baby-kids-education-primary-school-for-children/10240657">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/sweet-cake.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/bakery/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Bakery</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/bakery/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/eX4YO">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme">

            <div class="theme-screenshot">
              <img src="<?php echo esc_url(plugins_url('img/love-travel.jpg', __FILE__ )); ?>" alt="">
            </div>

            <span class="more-details"><a style="color:#fff; text-decoration:none;" target="_blank" href="http://www.nicdarkthemes.com/themes/travel/wp/demo/intro/?action=nd-shortcodes">Theme Details</a></span>
          
            <div class="theme-author">By Nicdark </div>

            <div class="theme-id-container">
              
              <h2 class="theme-name">Love Travel</h2>

              <div class="theme-actions">
                <a target="_blank" class="button activate" href="http://www.nicdarkthemes.com/themes/travel/wp/demo/intro/?action=nd-shortcodes">Demo</a>
                <a target="_blank" class="button button-primary" href="https://1.envato.market/PZ42q">Purchase</a>
              </div>
          
            </div>
          
          </div>
          <!--theme-->


          

        </div>
      </div>

    </div>


  <?php } 
  /*END 1*/

}
