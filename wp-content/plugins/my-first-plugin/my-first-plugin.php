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
    if (is_page('about')) {
        $word_count = str_word_count($content);
        $readtime = round($word_count / 150, 2);

        if ($readtime == 1) {
            $timer = ' minute';
        } else {
            $timer = ' minutes';
        }

       $content = '<strong> Temps de lecture : ' . $readtime . $timer .$content .' </strong>';
    }

    return $content;
}


