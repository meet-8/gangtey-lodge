<?php

namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;

class TsContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // '*',
        'partials.content-ts',
    ];

    /**
     * Data to be passed to the view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'tsContetData' => $this->tsContetData(),
            // Add more fields as needed
        ];
    }

    /**
     * Get ACF repeater field.
     *
     * @return array
     */

    public function tsContetData()
    {
        $data = [];
        $flexible_content = get_field('Page_Content');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'hero_slider') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'images'            => $content['images'],
                        'title'             => $content['title'],
                        'button'            => $content['button'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'title'             => $content['title'],
                        'sub_title'         => $content['sub_title'],
                        'description'       => $content['description'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
            }
        }
        return $data;
    }
}
