<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Wp\Post\Hook;
use Wp\Post\Tool;

class PostsHashtag extends Component
{
    public $posts = [];

    public function postsAsPostDataSet($posts)
    {
        return array_map(function ($post) {
            $WpTool = new Tool();
            $post->thumbnail = $WpTool::objectThumbnail($post);
            unset($post->post_content);
            return $post;
        }, $posts);
    }
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($termid = null)
    {
        $posts = [];
        $taxQuery = [];

        if ($termid) {
            $taxQuery = array(
                'taxonomy' => 'hashtag',
                'field' => 'id',
                'terms' => $termid,
            );
        } else {
            $taxQuery = array(
                'taxonomy' => 'hashtag',
                'operator' => 'EXISTS'
            );
        }

        $posts = array_merge($posts, get_posts(array(
            'post_type' => ['insight', 'life', 'tb-story'],
            'numberposts' => 5,
            'tax_query' => array($taxQuery)
        )));

        usort($posts, function ($post_a, $post_b) {
            return $post_b->post_date <=> $post_a->post_date;
        });

        /**
         * 해당 태그에 게시물이 5개 이하라면 다른 연관된 태그를 찾아서 게시물을 추가한다.
         */
        if (count($posts) < 5) {
            $enoughPostCount = 5 - count($posts);
            $taxQuery['operator'] = 'NOT IN';
            $posts = array_merge($posts, get_posts(array(
                'post_type' => ['insight', 'life', 'tb-story'],
                'numberposts' => $enoughPostCount,
                'tax_query' => array($taxQuery)
            )));
        }

        $posts = (new Hook($posts, ['hashtag']))::$posts;
        $posts = $this->postsAsPostDataSet($posts);
        $this->posts = array_slice($posts, 0, 5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.posts-hashtag');
    }
}
