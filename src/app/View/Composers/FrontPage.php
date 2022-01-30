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
}
