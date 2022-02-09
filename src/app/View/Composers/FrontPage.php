<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Post\Hook;
use Wp\Post\Tool;
use Wp\Nav\Walker\Header;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'popularityPosts' => $this->popularityPosts(),
            'snsList' => $this->snsList(),
            'bannerMain' => $this->bannerMain(),
            'hashtagPosts' => $this->hashtagPosts,
            'hashtagPostNavigation' => $this->hashtagPostNavigation,
        ];
    }

    public function __construct()
    {
        $this->getHashPosts();
    }

    public function popularityPosts()
    {
        $posts = get_field('main-popularity_post', 'option');
        $posts = (new Hook($posts))::$posts;
        return $this->postsAsPostDataSet($posts);
    }

    public function postsAsPostDataSet($posts)
    {
        return array_map(function ($post) {
            $WpTool = new Tool();
            $post->thumbnail = $WpTool::objectThumbnail($post);
            unset($post->post_content);
            return $post;
        }, $posts);
    }

    public function snsList()
    {
        return wp_nav_menu([
            'menu' => 33, 'container' => false, 'echo' => false, 'depth' => 1,
            'menu_class' => 'nav__sns',
            'walker' => new Header\SNS(),
        ]);
    }

    public function bannerMain()
    {
        $posts = get_posts(array(
            'post_type' => 'banner',
            'numberposts' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'banner_category',
                    'operator' => 'EXISTS'
                )
            )
        ));

        foreach ($posts as $post) {
            $title = get_field('b_title', $post->ID);
            $content = get_field('b_content', $post->ID);
            $buttons = get_field('b_button_group', $post->ID);

            $post->banner_title = $title;
            $post->banner_content = $content;
            $post->buttons = $buttons;

            $post->isBlackText = false;
            $thumbnail_id = get_post_thumbnail_id($post);
            $post->thumbnail_uri = '';
            if (!empty($thumbnail_id)) {
                $tool = new Tool();
                $thumbnail_path = $tool->return_image_path($thumbnail_id);

                $post->isBlackText = $tool->get_avg_luminance($thumbnail_path);

                $post->thumbnail_uri = get_the_post_thumbnail_url($post);
            }
        }


        return $posts;
    }

    public $hashtagPostNavigation = array();
    public $hashtagPosts = array();

    public function getHashPosts()
    {
        $hashtags = get_field('main-hashtag', 'option');
        foreach ($hashtags as $hashtag) {
            $posts = get_posts(array(
                'post_type' => ['insight', 'life', 'tb-story'],
                'numberposts' => 6,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'hashtag',
                        'field' => 'slug',
                        'terms' => $hashtag->slug,
                    )
                )
            ));

            $posts = (new Hook($posts, ['hashtag']))::$posts;
            if (count($posts) > 5) {
                $this->hashtagPostNavigation[$hashtag->slug] = $hashtag;
                usort($posts, function ($post_a, $post_b) {
                    return $post_b->post_date <=> $post_a->post_date;
                });
                $posts = $this->postsAsPostDataSet($posts);
                $this->hashtagPosts[$hashtag->slug] = $posts;
            }
        }
    }
}
