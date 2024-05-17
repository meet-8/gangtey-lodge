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
                } elseif ($content['acf_fc_layout'] == 'logo_section') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'logo_images'       => $content['logo_images'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'common_section') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'logo'              => $content['logo'],
                        'title'             => $content['title'],
                        'description'       => $content['description'],
                        'button'            => $content['button'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'zigzag_section') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'image_alignment'   => $content['image_alignment'],
                        'image'             => $content['image'],
                        'tag'               => $content['tag'],
                        'title'             => $content['title'],
                        'description'       => $content['description'],
                        'button'            => $content['button'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'full_image_content') {
                    $this_content = (object) [
                        'layout'            => $content['acf_fc_layout'],
                        'image'             => $content['image'],
                        'tag'               => $content['tag'],
                        'title'             => $content['title'],
                        'description'       => $content['description'],
                        'button'            => $content['button'],
                        'id'                => $content['id'],
                        'extra_class'       => $content['extra_class'],
                        'hide_section'      => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'page_grid_section') {
                    $page = array();
                    $page_args = array(
                        'post_type' => 'page',
                        'post__in' => array(161, 165, 168),
                    );
                    $page_query = new \WP_Query($page_args);
                    if ($page_query->have_posts()) {
                        while ($page_query->have_posts()) : $page_query->the_post();
                            $page[] = array(
                                'title'     => get_the_title(),
                                'excerpts'  => get_the_excerpt(),
                                'image'     => get_the_post_thumbnail_url(),
                                'permalink' => get_the_permalink(),
                                'post_id'   => get_the_ID(),
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'page' => $page,
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}
