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
            'recentTagsPosts' => $this->recentTagsPosts(),
            'collectionPosts' => $this->collectionPosts(),
            'snsList' => $this->snsList(),
            'bannerMain' => $this->bannerMain(),
        ];
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

    public function recentTagsPosts()
    {
        /**
         * tags의 키값을들 쿼리할 태그들로 가져오기
         */
        $tags = [
            'tech' => [],
            'business' => [],
            'economy' => [],
        ];
        foreach ($tags as $key => $tag) {
            $posts = [];
            foreach (['insight', 'life', 'tb-story'] as $postType) {
                $posts = array_merge($posts, get_posts(array(
                    'post_type' => $postType,
                    'numberposts' => 10,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )));
            }
            $posts = (new Hook($posts))::$posts;
            $posts = $this->postsAsPostDataSet($posts);

            usort($posts, function ($post_a, $post_b) {
                return $post_b->post_date <=> $post_a->post_date;
            });
            $tags[$key] = $posts;
        }

        // return ['tech' => $this->popularityPosts(), 'business' => $this->popularityPosts(), 'economy' => $this->popularityPosts()];
        return $tags;
    }

    public function collectionPosts()
    {

        $posts = [];
        foreach (['insight', 'life', 'tb-story'] as $postType) {
            $posts = array_merge($posts, get_posts(array(
                'post_type' => $postType,
                'numberposts' => 5,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'collection',
                        'operator' => 'EXISTS'
                    )
                )
            )));
        }
        $posts = (new Hook($posts, ['collection']))::$posts;
        $posts = $this->postsAsPostDataSet($posts);
        usort($posts, function ($post_a, $post_b) {
            return $post_b->post_date <=> $post_a->post_date;
        });
        return array_slice($posts, 0, 5);
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
            $buttonText = get_field('b_button_text', $post->ID);
            $buttonLink = get_field('b_button_link', $post->ID);
            $buttonLinkTarget = get_field('b_button_link_target', $post->ID);

            $post->banner_title = $title;
            $post->banner_content = $content;
            $post->banner_button_text = $buttonText;
            $post->banner_button_link = $buttonLink;

            if ($buttonLinkTarget) {
                $post->banner_button_link_target = '_blank';
            } else {
                $post->banner_button_link_target = '_self';
            }

            $post->isBlackText = false;
            $thumbnail_id = get_post_thumbnail_id($post);
            $post->thumbnail_uri = '';
            if (!empty($thumbnail_id)) {
                $tool = new Tool();
                $thumbnail_path = $tool->return_image_path($thumbnail_id);

                var_dump($thumbnail_path);
                $post->isBlackText = $tool->get_avg_luminance($thumbnail_path);

                $post->thumbnail_uri = get_the_post_thumbnail_url($post);
            }
        }


        return $posts;
    }
}
