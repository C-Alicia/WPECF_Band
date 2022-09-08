<?php

/*
Plugin Name: Mon premier plugin
Description: Mon premier plugin !
Author: Moi
*/

add_filter('the_content', 'filter_the_content');

/**
 * Filters the post content.
 *
 * @param string $content Content of the current post.
 * @return string Content of the current post.
 */
function filter_the_content(string $content): string
{
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 150);

    if ($readingtime == 1) {
        $timer = ' minute';
    } else {
        $timer = ' minutes';
    }

    $content .= $readingtime . $timer;

    return $content;
}
