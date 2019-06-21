<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function cat()
    {
      $cat_items = get_posts([
        'post_type' => 'post',
        'category_name' => 'front-page',
        'posts_per_page' => '5'
      ]);
      return array_map(function($post) {
      return [
        'title' => apply_filters('the_title', $post->post_title),
           'content' => apply_filters('the_content', $post->post_content),
           'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
      ];
   }, $cat_items);
  }
}
