<?php
/* options css */
$header_image = get_header_image();
$bg_image = get_background_image();
$bg_color = get_background_color();
?>
<?php if( $bg_image || $bg_color): ?>
.container-wrap, footer .ftop {float: left;margin: 0;padding: 2% 2% 0 2%;width: 96%;background-color:white;}
#header {background:white;}footer.footer-bottom {background:transparent none !important;}.fbottom {background-color: #52C0D4;color:#fff !important;width: 96%;margin: 0;padding: 0.6em 2% !important;}#siteinfo {margin:0 0 0 1.6em;}@media only screen and (min-width:300px) and (max-width:770px){.container-wrap, #custom footer .ftop {float: left;margin: 0;padding: 2% !important;width: 96% !important;background-color:white;}#custom-img-header {margin:0 0 2em;}}
<?php endif; ?>
<?php
if( get_theme_option('body_font') == 'Choose a font' || get_theme_option('body_font') == '') { ?>
body {font-family: 'Open Sans', sans-serif;font-weight: 400;}
<?php } else { ?>
body { font-family: <?php echo get_theme_option('body_font'); ?> !important; }
<?php } ?>
<?php
if( get_theme_option('headline_font') == 'Choose a font' || get_theme_option('headline_font') == '') { ?>
#siteinfo div,h1,h2,h3,h4,h5,h6,.header-title,#main-navigation, #featured #featured-title, #cf .tinput, #wp-calendar caption,.flex-caption h1,#portfolio-filter li,.nivo-caption a.read-more,.form-submit #submit,.fbottom,ol.commentlist li div.comment-post-meta, .home-post span.post-category a,ul.tabbernav li a {font-family: 'Open Sans', sans-serif;font-weight: 600;}
<?php } else { ?>
#siteinfo div,h1,h2,h3,h4,h5,h6,.header-title,#main-navigation, #featured #featured-title, #cf .tinput, #wp-calendar caption,.flex-caption h1,#portfolio-filter li,.nivo-caption a.read-more,.form-submit #submit,.fbottom,ol.commentlist li div.comment-post-meta, .home-post span.post-category a,ul.tabbernav li a {font-family:  <?php echo get_theme_option('headline_font'); ?> !important; }
<?php } ?>
<?php
if( get_theme_option('navigation_font') == 'Choose a font' || get_theme_option('navigation_font') == '') { ?>
#main-navigation, .sf-menu li a {font-family: 'Open Sans', sans-serif;font-weight: 600;}
<?php } else { ?>
#main-navigation, .sf-menu li a {font-family:  <?php echo get_theme_option('navigation_font'); ?> !important; }
<?php } ?>
<?php
if(get_theme_option('slider_height')): ?>
#Gallerybox,#myGallery,#myGallerySet,#flickrGallery {height: <?php echo get_theme_option('slider_height'); ?>px !important;}
<?php endif; ?>

<?php
if( get_theme_option('topnav_color') != '' ) {
$topnav_color = get_theme_option('topnav_color');
?>
#top-navigation {background-color: <?php echo $topnav_color; ?>;}
#top-navigation .sf-menu li a:hover,#top-navigation .sf-menu li:hover,#top-navigation .sf-menu ul {background-color: <?php echo dehex($topnav_color, -10); ?>;}
#top-navigation .sf-menu ul li a:hover {background-color: <?php echo dehex($topnav_color, -20); ?>;background-image: none;}
<?php } ?>

<?php
if( get_theme_option('main_color') != '' ) {
$main_color = get_theme_option('main_color');
?>
#custom #right-sidebar ul.tabbernav { background: <?php echo $main_color; ?> !important; }
h2.header-title { background: <?php echo $main_color; ?>; }
#right-sidebar ul.tabbernav li.tabberactive a,#right-sidebar ul.tabbernav li.tabberactive a:hover { color:#fff !important; background-color: <?php echo dehex($main_color, -20); ?>; }
#right-sidebar ul.tabbernav li a:hover, #custom h2.inblog {color: #FFF !important;background-color: <?php echo dehex($main_color, -10); ?>;}
#content .item-title a,h2.post-title a, h1.post-title a, article.post .post-meta a:hover, #custom .product-with-desc ul.products li h1.post-title a:hover, #custom .twitterbox span a, #custom h3.widget-title a, #custom .ftop div.textwidget a, #custom .ftop a:hover, #custom .ftop .widget_my_theme_twitter_widget a, #content .activity-header a, #content .activity-inner a, #content .item-list-tabs a {
color: <?php echo $main_color; ?> !important;}
#custom #post-entry h1.post-title a:hover,#custom #post-entry h2.post-title a:hover {color: #222;}
#woo-container p.price,.wp-pagenavi a, #woo-container span.price, #custom ul.product_list_widget li span.amount,span.pricebox, #custom .product-with-desc ul.products li .post-product-right span.price, .js_widget_product_price,#jigo-single-product p.price   {background: none repeat scroll 0 0 <?php echo dehex($main_color, 18); ?>;}
.wp-pagenavi .current, .wp-pagenavi a:hover{background: none repeat scroll 0 0 <?php echo dehex($main_color, -10); ?>;}
#post-navigator .wp-pagenavi a,#post-navigator .wp-pagenavi a:hover {background: none repeat scroll 0 0 <?php echo dehex($main_color, -30); ?>;}
#post-navigator .wp-pagenavi .current {background: none repeat scroll 0 0 <?php echo dehex($main_color, -50); ?>;}
#content a.activity-time-since {color: #888 !important;}
#content .item-list-tabs span  {background-color: <?php echo dehex($main_color, 10); ?> !important;}
#custom .widget a:hover, #custom h3.widget-title a:hover, #custom .ftop div.textwidget a:hover, #custom .ftop a:hover, #custom .ftop .widget_my_theme_twitter_widget a:hover {color: <?php echo dehex($main_color, -20); ?> !important;}
#custom h3.widget-title {border-bottom: 5px solid <?php echo $main_color; ?>;}
#searchform input[type="submit"], #searchform input[type="button"],#custom .bp-searchform #search-submit {background-color: <?php echo $main_color; ?> !important;}
#post-entry .post-content a, #author-bio a, #post-related a, #commentpost .fn a, ol.pinglist a, #post-navigator-single a,#commentpost #rssfeed a, #commentpost .comment_text a, #commentpost p a, .product_meta a, a.show_review_form, #custom .twitterbox li a  {color: <?php echo $main_color; ?>;}
.pagination-links a.page-numbers, #custom #woo-container nav.woocommerce-pagination a.page-numbers {background-color: <?php echo $main_color; ?>;color:#fff !important;}
.pagination-links .page-numbers, #custom #woo-container nav.woocommerce-pagination span.page-numbers.current {background-color: <?php echo dehex($main_color, -20); ?>;color:#fff !important;}
<?php } ?>
<?php
if( get_theme_option('footer_bottom_color') != '' ) {
$footer_bottom_color = get_theme_option('footer_bottom_color');
?>
#custom footer.footer-bottom, #custom footer.footer-bottom .fbottom {background-color: <?php echo $footer_bottom_color; ?>;color:#fff !important;}<?php } ?>

<?php global $wp_cats2;
foreach ($wp_cats2 as $cat_value) {
$thecatid = get_cat_ID($cat_value);
if($thecatid) {
$catslug = dez_get_cat_slug($thecatid);
$getcategoryslug = get_category_by_slug($catslug);
$cat_id = $getcategoryslug->term_id;
}
if(!$thecatid) {
if( class_exists('woocommerce') || class_exists('jigoshop') ) {
$cat_name = get_term_by('name', $cat_value, 'product_cat');
if($cat_name) {
$cat_id = $cat_name->term_id;
}
}
}
$cat_value_option = 'tn_cat_color_' . $cat_id;
$cat_color_option = get_theme_option( $cat_value_option, 'cat' );
?>
<?php if( $cat_color_option != '' ): ?>
#main-navigation li.<?php echo $cat_value_option; ?> a {border-bottom: 5px solid <?php echo $cat_color_option; ?>;}
#main-navigation ul.sf-menu li.<?php echo $cat_value_option; ?>:hover {background-color: <?php echo $cat_color_option; ?>;}
#main-navigation li.<?php echo $cat_value_option; ?>.current-menu-item a {background-color: <?php echo $cat_color_option; ?>;color:white;}
ul.sub_<?php echo $cat_value_option; ?> li a {color: <?php echo $cat_color_option; ?>;}
#main-navigation .sf-menu li a:hover {color: #fff !important;}
#custom #main-navigation .sf-menu li.<?php echo $cat_value_option; ?> a:hover {color: #fff !important;
background-color: <?php echo $cat_color_option; ?>;}
aside.home-feat-cat h4.homefeattitle.feat_<?php echo $cat_value_option; ?> {border-bottom: 5px solid <?php echo $cat_color_option; ?>;}
h2.header-title.feat_<?php echo $cat_value_option; ?> {background-color: <?php echo $cat_color_option; ?>;padding: 1% 2%;width:95%;color: white;}
#custom .archive_<?php echo $cat_value_option; ?> h1.post-title a,#custom .archive_<?php echo $cat_value_option; ?> h2.post-title a {color: <?php echo $cat_color_option; ?> !important;}
aside.home-feat-cat.post_<?php echo $cat_value_option; ?> .widget a, aside.home-feat-cat.post_<?php echo $cat_value_option; ?> article a {color: <?php echo $cat_color_option; ?>;}
#custom #post-entry.archive_<?php echo $cat_value_option; ?> article .post-meta a:hover {color: <?php echo $cat_color_option; ?> !important;}
#main-navigation .sf-menu li.<?php echo $cat_value_option; ?> ul  {background-color: <?php echo $cat_color_option; ?>;background-image: none;}
#main-navigation .sf-menu li.<?php echo $cat_value_option; ?> ul li a:hover  {background-color: <?php echo dehex( $cat_color_option, -20 ); ?>;background-image: none;}
<?php endif; ?>
<?php } ?>

<?php global $wp_pages;
foreach ($wp_pages as $page_value) {
$page_id = $page_value;
$page_value_option = 'tn_page_color_' . $page_id;
$page_color_option = get_theme_option( $page_value_option, 'page' )
?>
<?php if( $page_color_option != '' ): ?>
#main-navigation li.menu-item-object-page.<?php echo $page_value_option; ?> a {border-bottom: 5px solid <?php echo $page_color_option; ?>;}
#main-navigation ul.sf-menu li.menu-item-object-page.<?php echo $page_value_option; ?>:hover {background-color: <?php echo $page_color_option; ?>;}
#main-navigation .sf-menu li.menu-item-object-page.<?php echo $page_value_option; ?> a:hover {color: #fff !important;
background-color: <?php echo $page_color_option; ?>;}
#main-navigation .sf-menu li.menu-item-object-page.<?php echo $page_value_option; ?> ul  {background-color: <?php echo $page_color_option; ?>;background-image: none;}
#main-navigation .sf-menu li.menu-item-object-page.<?php echo $page_value_option; ?> ul li a:hover  {background-color: <?php echo dehex( $page_color_option, -20 ); ?> !important;background-image: none;}
<?php endif; ?>
<?php } ?>