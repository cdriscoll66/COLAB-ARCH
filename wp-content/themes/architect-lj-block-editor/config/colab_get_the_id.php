<?php
function colab_get_the_id() {

    if (is_home() || is_archive()) :
        return;
    elseif (is_admin()) :
        return intval($_GET['post']);
    else :
        global $post;
        return $post->ID;
    endif;
}
