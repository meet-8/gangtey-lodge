<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (!function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (!locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


add_theme_support('sage');

/*** Admin Login ***/
function login_logo()
{
    echo '<style type="text/css">
        #login { padding: 10% 0 0; position: relative; z-index: 9;}
        body{background-image: url(' . get_bloginfo('template_directory') . '/resources/images/admin-login.jpg) !important;background-size: cover !important; position: relative; background-position: 45%; background-repeat: no-repeat; }
        body::before { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 100%;background: rgba(0, 0, 0, 0.6); }
        p a{color:#162B46;}
        .privacy-policy-page-link a{color:#162B46;}
        h1 a{background-image: url(' . get_bloginfo('template_directory') . '/resources/images/logo.svg) !important;background-size: 95% !important; width:80% !important;margin: 0 auto !important; box-shadow: none !important; height: 140px !important; margin: 20px auto !important; box-shadow: none !important;height: 98px !important; background-size: contain !important;}
        #nav a{color:#ffffff !important;}
        #nav a:hover{color:#162B46 !important;}
        #backtoblog a{color:#ffffff !important;}
         #backtoblog a:hover{color:#162B46 !important;}
         .wp-core-ui .button-primary {
            background: rgb(174,147,100);
            border-color: rgb(250, 247, 242);
            color: rgb(250, 247, 242);
            text-decoration: none;
            text-shadow: none;
          }.wp-core-ui .button-secondary {
            color: rgb(174,147,100);}
            .wp-core-ui .button-primary:hover {
                background: #fff;
                border-color: #AE9364;
                color: #AE9364;
              }input[type=password]:focus,input[type=text]:focus,input[type=checkbox]:focus{border-color: #162B46;
            box-shadow: 0 0 0 1px #162B46;
            outline: 2px solid transparent;}
        </style>';
}
add_action('login_head', 'login_logo');

function my_login_logo_url()
{
    return esc_url(home_url('/'));
}
add_filter('login_headerurl', 'my_login_logo_url');

// add theme option page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => __('Theme Options', 'sage'),
        'capability'    => 'manage_options',
        'position'      => '81'
    ));
}


