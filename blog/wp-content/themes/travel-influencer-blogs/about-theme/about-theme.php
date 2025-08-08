<?php
/**
 * Titan Notice Handler
 */

defined( 'ABSPATH' ) || exit;

define('TRAVEL_INFULUENCER_BLOGS_PREMIUM_DOCUMENTATION',__('https://preview.titanthemes.net/documentation/travel-influencer-blogs-pro/','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_SUPPORT',__('https://wordpress.org/support/theme/travel-influencer-blogs/','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_REVIEW',__('https://wordpress.org/support/theme/travel-influencer-blogs/reviews/#new-post','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_BUY_NOW',__('https://www.titanthemes.net/products/travel-influencer-wordpress-theme','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_DOC_URL',__('https://preview.titanthemes.net/documentation/travel-influencer-blogs-lite/','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_LIVE_DEMO',__('https://preview.titanthemes.net/travel-influencer-blogs/','travel-influencer-blogs'));
define('TRAVEL_INFULUENCER_BLOGS_BUNDLE',__('https://www.titanthemes.net/products/wordpress-theme-bundle','travel-influencer-blogs'));
/**
 * Admin Hook
 */
function travel_influencer_blogs_admin_menu_page() {
    $travel_influencer_blogs_theme = wp_get_theme( get_template() );

    add_theme_page(
        $travel_influencer_blogs_theme->display( 'Name' ),
        $travel_influencer_blogs_theme->display( 'Name' ),
        'manage_options',
        'travel-influencer-blogs',
        'travel_influencer_blogs_do_admin_page'
    );
}
add_action( 'admin_menu', 'travel_influencer_blogs_admin_menu_page' );

/**
 * Enqueue getting started styles and scripts
 */
function titan_widgets_backend_enqueue() {
    wp_enqueue_style( 'titan-getting-started', get_template_directory_uri() . '/about-theme/about-theme.css' );
}
add_action( 'admin_enqueue_scripts', 'titan_widgets_backend_enqueue' );

/**
 * Class Titan_Notice_Handler
 */
class Titan_Notice_Handler {

    public static $nonce;

    /**
     * Empty Constructor
     */
    public function __construct() {
        // Activation notice
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
        add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action( 'admin_notices', array( $this, 'titan_theme_info_welcome_admin_notice' ), 3 );
        add_action( 'wp_ajax_titan_getting_started', array( $this, 'titan_getting_started' ) );
    }

    /**
     * Display an admin notice linking to the about page
     */
    public function titan_theme_info_welcome_admin_notice() {

    $current_screen = get_current_screen();

    $travel_influencer_blogs_theme = wp_get_theme();
    if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) && $current_screen->base != 'appearance_page_travel-influencer-blogs' ) {
        echo '<div class="updated notice notice-success is-dismissible getting-started">';
        echo '<p><strong>' . sprintf( esc_html__( 'Welcome! Thank you for choosing %1$s.', 'travel-influencer-blogs' ), esc_html( $travel_influencer_blogs_theme->get( 'Name' ) ) ) . '</strong></p>';
        echo '<p class="plugin-notice">' . esc_html__( 'By clicking "Get Started," you can access our theme features.', 'travel-influencer-blogs' ) . '</p>';
        echo '<div class="titan-buttons">';
        echo '<p><a href="' . esc_url(admin_url('themes.php?page=travel-influencer-blogs')) . '" class="titan-install-plugins button button-primary">' . sprintf( esc_html__( 'Get started with %s', 'travel-influencer-blogs' ), esc_html( $travel_influencer_blogs_theme->get( 'Name' ) ) ) . '</a></p>';
        echo '<p><a href="' . esc_url( TRAVEL_INFULUENCER_BLOGS_BUY_NOW ) . '" class="button button-secondary" target="_blank">' . esc_html__( 'GO FOR PREMIUM', 'travel-influencer-blogs' ) . '</a></p>';
        echo '</div>';
        echo '<a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss">Dismiss</a>';
        echo '</div>';
    }
}

    /**
     * Register dismissal of the getting started notification.
     * Acts on the dismiss link.
     * If clicked, the admin notice disappears and will no longer be visible to this user.
     */
    public function getting_started_notice_dismissed() {
        if ( isset( $_GET['gs-notice-dismissed'] ) ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
    }

    /**
     * Deletes the getting started notice's dismiss status upon theme switch.
     */
    public function flush_dismiss_status() {
        delete_user_meta( get_current_user_id(), 'gs_notice_dismissed' );
    }
}
new Titan_Notice_Handler();

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function travel_influencer_blogs_do_admin_page() { 
    $travel_influencer_blogs_theme = wp_get_theme(); ?>
    <div class="travel-influencer-blogs-themeinfo-page--wrapper">
        <div class="free&pro">
            <div id="travel-influencer-blogs-admin-about-page-1">
                <div class="theme-detail">
                   <div class="travel-influencer-blogs-admin-card-header-1">
                    <div class="travel-influencer-blogs-header-left">
                        <h2>
                            <?php echo esc_html( $travel_influencer_blogs_theme->Name ); ?> <span><?php echo esc_html($travel_influencer_blogs_theme['Version']);?></span>
                        </h2>
                        <p>
                            <?php
                            echo wp_kses_post( apply_filters( 'titan_theme_description', esc_html( $travel_influencer_blogs_theme->get( 'Description' ) ) ) );
                        ?>
                        </p>
                    </div>
                    <div class="travel-influencer-blogs-header-right">
                        <div class="travel-influencer-blogs-pro-button">
                            <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_BUY_NOW ); ?>" class="travel-influencer-blogs-button button-primary" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'UPGRADE TO PREMIUM', 'travel-influencer-blogs' ); ?>
                            </a>
                        </div>
                    </div>
                </div>   
                </div>   
                <div class="travel-influencer-blogs-features">
                    <div class="travel-influencer-blogs-features-box">
                        <h3><?php esc_html_e( 'PREMIUM DEMONSTRATION', 'travel-influencer-blogs' ); ?></h3>
                        <p><?php esc_html_e( 'Effortlessly create and customize your website by arranging text, images, and other elements using the Gutenberg editor, making web design easy and accessible for all skill levels.', 'travel-influencer-blogs' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_LIVE_DEMO ); ?>" class="travel-influencer-blogs-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DEMONSTRATION', 'travel-influencer-blogs' ); ?>
                            </a>
                    </div>
                    <div class="travel-influencer-blogs-features-box">
                        <h3><?php esc_html_e( 'REVIEWS', 'travel-influencer-blogs' ); ?></h3>
                        <p><?php esc_html_e( 'We would be happy to hear your thoughts and value your evaluation.', 'travel-influencer-blogs' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_REVIEW ); ?>" class="travel-influencer-blogs-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'REVIEWS', 'travel-influencer-blogs' ); ?>
                            </a>
                    </div>
                    <div class="travel-influencer-blogs-features-box">
                        <h3><?php esc_html_e( '24/7 SUPPORT', 'travel-influencer-blogs' ); ?></h3>
                        <p><?php esc_html_e( 'Please do not hesitate to contact us at support if you need help installing our lite theme. We are prepared to assist you!', 'travel-influencer-blogs' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_SUPPORT ); ?>" class="travel-influencer-blogs-button button-secondary-1" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'SUPPORT', 'travel-influencer-blogs' ); ?>
                        </a>
                    </div>
                    <div class="travel-influencer-blogs-features-box">
                        <h3><?php esc_html_e( 'THEME INSTRUCTION', 'travel-influencer-blogs' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance configuring and setting up the theme, our tutorial is available. A fast and simple method for setting up the theme.', 'travel-influencer-blogs' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_DOC_URL ); ?>" class="travel-influencer-blogs-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DOCUMENTATION', 'travel-influencer-blogs' ); ?>
                            </a>
                    </div>
                </div>   
            </div>
            <div id="travel-influencer-blogs-admin-about-page-2">
                <div class="theme-detail">
                   <div class="travel-influencer-blogs-admin-card-header-1">
                        <div class="travel-influencer-blogs-header-left-pro"> 
                            <h2><?php esc_html_e( 'The premium version of this theme will be available for you to enhance or unlock our premium features.', 'travel-influencer-blogs' ); ?></h2>
                        </div>
                        <div class="travel-influencer-blogs-header-right-2">
                            <div class="travel-influencer-blogs-pro-button">
                                <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_BUY_NOW ); ?>" class="travel-influencer-blogs-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'GO TO PREMIUM', 'travel-influencer-blogs' ); ?>
                                </a>
                            </div>
                            <div class="travel-influencer-blogs-pro-button">
                                <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_LIVE_DEMO ); ?>" class="travel-influencer-blogs-button button-primary-1 pro-demo" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PREMIUM DEMO', 'travel-influencer-blogs' ); ?>
                                </a>
                            </div>
                            <div class="travel-influencer-blogs-pro-button">
                                <a href="<?php echo esc_url( TRAVEL_INFULUENCER_BLOGS_PREMIUM_DOCUMENTATION ); ?>" class="travel-influencer-blogs-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PRO DOCUMENTATION', 'travel-influencer-blogs' ); ?>
                                </a>
                            </div>  
                        </div>
                    </div>
                    <div class="travel-influencer-blogs-admin-card-header-2">
                        <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $travel_influencer_blogs_theme->get_screenshot() ); ?>" />
                    </div> 
                </div>    
            </div>
        </div>
    </div>
<?php } ?>