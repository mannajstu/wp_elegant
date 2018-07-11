<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "wp_elegant";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Elegant Theme Setting', 'wp_elegant' ),
        'page_title'           => __( 'Elegant Theme', 'wp_elegant' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => 'wp_elegant',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );



    // Panel Intro text -> before the form
if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
    if ( ! empty( $args['global_variable'] ) ) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace( '-', '_', $args['opt_name'] );
    }
    $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
} else {
    $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
}

    // Add content after the form.
$args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
        Redux::setSection( $opt_name, array(
            'title'            => __( 'Elegant Theme Option', 'wp_' ),
            'id'               => 'basic',
            'desc'             => __( 'Elegant Theme Option!', 'wp_elegant' ),
            'customizer_width' => '400px',
            'icon'             => 'el el-home',

        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Top Section', 'wp_elegant' ),
            'id'         => 'top-section',
            
            'subsection' => true,
            'fields'     => array(
                
                array(
                    'id'       => 'top-section-backgroud-image',
                    'type'     => 'media',
                    'title'    => __( 'Top Section Background Image', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'top-section-backgroud-video',
                    'type'           => 'media',
                    'library_filter' => array('mp4'),
                    'mode' => false,
                    'preview' => false,
                    'url' => true,
                    'title'    => __( 'Top Section Background Video', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'top-section-logo',
                    'type'     => 'media',
                    'title'    => __( 'Top Section Logo', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'top-section-title-1',
                    'type'     => 'text',
                    'title'    => __( 'Top Section Title Part 1', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'top-section-title-2',
                    'type'     => 'text',
                    'title'    => __( 'Top Section Title Part 2', 'wp_elegant' ),
                    
                ),
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'About Section', 'wp_elegant' ),
            'id'         => 'second-section',
            
            'subsection' => true,
            'fields'     => array(
                
                array(
                    'id'       => 'second-section-backgroud-image',
                    'type'     => 'media',
                    'title'    => __( 'About Section Background Image', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'second-section-description',
                    'type'     => 'textarea',
                    'title'    => __( 'About Section Description', 'wp_elegant' ),
                    
                ),
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Type Section', 'wp_elegant' ),
            'id'         => 'about-section',
            
            'subsection' => true,
            'fields'     => array(
                
                array(
                    'id'       => 'type-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Type Section Title', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-project-no-1',
                    'type'     => 'text',
                    'title'    => __( 'Type First Project No', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-descriptio-1',
                    'type'     => 'textarea',
                    'title'    => __( 'Type First Description', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-project-no-2',
                    'type'     => 'text',
                    'title'    => __( 'Type Second Project No', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-descriptio-2',
                    'type'     => 'textarea',
                    'title'    => __( 'Type Second Description', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-project-no-3',
                    'type'     => 'text',
                    'title'    => __( 'Type Third Project No', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-descriptio-3',
                    'type'     => 'textarea',
                    'title'    => __( 'Type Third Description', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-project-no-4',
                    'type'     => 'text',
                    'title'    => __( 'Type Fourth Project No', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'type-section-descriptio-4',
                    'type'     => 'textarea',
                    'title'    => __( 'Type Fourth Description', 'wp_elegant' ),
                    
                    
                ),
                
                
                
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Testimonial Section', 'wp_elegant' ),
            'id'         => 'testimonial-section',
            
            'subsection' => true,
            'fields'     => array(
                
                array(
                    'id'       => 'testimonial-section-backgroud-image',
                    'type'     => 'media',
                    'title'    => __( 'Testimonial Section Background Image', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'testimonial-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Testimonial Section Title', 'wp_elegant' ),
                    
                ),
                array(
                    'id'          => 'testimonial-section-description',
                    'type'        => 'slides',
                    'title'       => __('Add Testimonial', 'wp_elegant'),
                    'show' => array(
                        'title' => false,
                        'description' => true,
                        'url' => false              
                    ),
                    
                    'placeholder' => array(
                        
                        'description'     => __('Add Testimonial Description Here', 'wp_elegant'),
                        
                    ),
                ),
            ),
        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Gallery/Projetct Section', 'wp_elegant' ),
            'id'         => 'gallery-section',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'gallery-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Gallery Section Title', 'wp_elegant' ),
                    
                ),
                
                
                array(
                    'id'          => 'gallery-section-description',
                    'type'        => 'slides',
                    'title'       => __('Add Gallery Project', 'wp_elegant'),
                    
                    'placeholder' => array(
                        'title'       => __('Add Gallery/Project Title', 'wp_elegant'),
                        'description'     => __('Add Gallery Description Here', 'wp_elegant'),
                        'url'=> __('Project Number', 'wp_elegant'),
                    ),
                ),
            ),
        ) );

        Redux::setSection( $opt_name, array(
            'title'      => __( 'Subscribe Section', 'wp_elegant' ),
            'id'         => 'subscribe-section',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'subscribe-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Subscribe Section Title', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'subscribe-section-backgroud-image',
                    'type'     => 'media',
                    'title'    => __( 'Subscribe Section Background Image', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'subscribe-section-mailchimp',
                    'type'     => 'textarea',
                    'title'    => __( 'Subscribe Mailchimp Section', 'wp_elegant' ),
                    
                ),
                
            ),
            
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Pricing Section', 'wp_elegant' ),
            'id'         => 'pricing-section',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'pricing-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Pricing Section Title', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'pricing-section-title-below',
                    'type'     => 'textarea',
                    'title'    => __( 'Pricing Section Title Below', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'pricing-section-backgroud-image',
                    'type'     => 'media',
                    'title'    => __( 'Pricing Section Background Image', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'pricing-list-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Pricing List Title', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'pricing-list-section-description',
                    'type'     => 'textarea',
                    'title'    => __( 'Pricing Section Title Below', 'wp_elegant' ),
                    
                ),
                
            ),
            
            
            
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Pricing List', 'wp_elegant' ),
            'id'         => 'pricing-list-section',
            
            'subsection' => true,
            'fields'     => array(
               
             array(
                'id'          => 'pricing-list-section-package',
                'type'        => 'slides',
                'title'       => __('Add Price Package', 'wp_elegant'),
                'show' => array(
                    'title' => true,
                    'description' => true,
                    'url' => false ,
                    
                ),

                
                'placeholder' => array(
                    'title'           => __('Package title', 'wp_elegant'),
                    
                    'description'     => __('Add Package Description Here', 'wp_elegant'),
                    
                ),
            ),
         ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Pricing Inclue Description', 'wp_elegant' ),
            'id'         => 'pricing-list-include',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'pricing-list-include-description',
                    'type'     => 'textarea',
                    'title'    => __( 'Pricing Mini Box Description', 'wp_elegant' ),
                    
                ),

                
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Contact Section', 'wp_elegant' ),
            'id'         => 'contact-section',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'contact-section-title',
                    'type'     => 'text',
                    'title'    => __( 'Contact Section Title', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'contact-section-map',
                    'type'     => 'textarea',
                    'title'    => __( 'Contact Section Map', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'contact-section-address',
                    'type'     => 'textarea',
                    'title'    => __( 'Contact Section Address', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'contact-section-phone',
                    'type'     => 'textarea',
                    'title'    => __( 'Contact Section Phone', 'wp_elegant' ),
                    
                ),
                array(
                    'id'       => 'contact-section-email',
                    'type'     => 'textarea',
                    'title'    => __( 'Contact Section Email', 'wp_elegant' ),
                    
                ),
                
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Footer Contact Form', 'wp_elegant' ),
            'id'         => 'footer-contact-form',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'footer-contact-form',
                    'type'     => 'text',
                    'title'    => __( 'Footer Contact Form', 'wp_elegant' ),
                    'subtitle'    => __( 'Insert Contact Form Shortcode', 'wp_elegant' ),
                    
                ),
                
                
            ),
        ) );



        Redux::setSection( $opt_name, array(
            'title'      => __( 'Social Link', 'wp_elegant' ),
            'id'         => 'social-link',
            
            'subsection' => true,
            'fields'     => array(

                
                array(
                    'id'       => 'social-link-facebook',
                    'type'     => 'text',
                    'title'    => __( 'Facebook', 'wp_elegant' ),
                    'validate' => 'url',
                ),
                array(
                    'id'       => 'social-link-twitter',
                    'type'     => 'text',
                    'title'    => __( 'Twitter', 'wp_elegant' ),
                    'validate' => 'url',
                ),
                array(
                    'id'       => 'social-link-google',
                    'type'     => 'text',
                    'title'    => __( 'Google plus', 'wp_elegant' ),
                    'validate' => 'url',
                ), 
                array(
                    'id'       => 'social-link-youtube',
                    'type'     => 'text',
                    'title'    => __( 'Youtube', 'wp_elegant' ),
                    'validate' => 'url',
                ),
                
                array(
                    'id'       => 'social-link-pinterest',
                    'type'     => 'text',
                    'title'    => __( 'Pinterest', 'wp_elegant' ),
                    'validate' => 'url',
                ),
                array(
                    'id'       => 'social-link-instagram',
                    'type'     => 'text',
                    'title'    => __( 'Instagram', 'wp_elegant' ),
                    'validate' => 'url',
                ),
                
                
                
            ),
        ) );


               
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Package Choosen  Page', 'wp_elegant' ),
            'id'         => 'package-choosen-section',
            
            
            'fields'     => array(
                
                array(
                    'id'       => 'package-choosen-backgorud-image',
                    'type'     => 'media',
                    'title'    => __( 'Package Choosen Background Image', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'package-choosen-form-title',
                    'type'     => 'text',
                    'title'    => __( 'Package Choosen Form Title', 'wp_elegant' ),
                    
                    
                ),
                array(
                    'id'       => 'package-choosen-form',
                    'type'     => 'text',
                    'title'    => __( 'Package Choosen Form', 'wp_elegant' ),
                    'subtitle' =>__('Insert The Conatct Form ShortCode', 'wp_elegant')
                    
                    
                ),
                array(
                    'id'       => 'package-choosen-name',
                    'type'     => 'multi_text',
                    'title'    => __( 'Package Name', 'wp_elegant' ),
                    
                    
                ),
                
                
                
                
                
            ),
        ) );
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Copy Right Section', 'wp_elegant' ),
            'id'         => 'copy-right-section',
            
            
            'fields'     => array(
                
                array(
                    'id'       => 'copy-right-text',
                    'type'     => 'textarea',
                    'title'    => __( 'Copy Right Text', 'wp_elegant' ),
                    
                    
                ),
                
                
            ),
        ) );
        

        

    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

