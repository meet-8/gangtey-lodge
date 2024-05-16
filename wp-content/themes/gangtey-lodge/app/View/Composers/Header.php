<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer',
        'sections.header',
        'sections.footer',
        'index',
        '404'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [

            //Header    
            'header_white_logo'      => get_field('header_white_logo', 'option'),
            'header_black_logo'  => get_field('header_black_logo', 'option'),
            'header_button'  => get_field('header_button', 'option'),

            // Social Information
            'social_media' => get_field('social_media','option'),
            'phone_number' => get_field('phone_number','option'),
            'email' => get_field('email','option'),

            // Footer
            'footer_logo'       => get_field('footer_logo', 'option'),
            'footer_button'  => get_field('footer_button', 'option'),

            //404
            'page_not_found_title'        => get_field('page_not_found_title', 'option'),
            'page_not_found_description'  => get_field('page_not_found_description', 'option'),
            'page_not_found_image'        => get_field('page_not_found_image', 'option'),
        ];
    }
}
