<?php

/**
 * Page for Type ID
 *
 * Returns the ID of the page associated with a custom post type based on whats
 * configured on Settings > Reading, supports the plugin "Page for post type"
 * with function `get_page_for_post_type()` with a fallback to match the type
 * registration for `has_archive` or the `rewrite['slug']`. Functionally similar
 * to the the built-in WordPress get_option('page_for_posts').
 *
 * @link https://github.com/humanmade/page-for-post-type
 *
 * @param string type     The type to match.
 * @param string taxonomy The taxonomy to match; required to match taxononmy paths to pages.
 * @param string term     The term to match; required to match term paths to pages.
 * @return int The corresponding page ID.
 */
function colab_get_page_for_type_id($type = null, $taxonomy = null, $term = null)
{
    $page_id = null;

    /** Check for Page for Post Type Plugin values */
    if (function_exists('get_page_for_post_type') && $page_id = get_page_for_post_type($type)) :

        return $page_id;

    else :

        if (is_404()) :

            return get_page_by_path('page-not-found');

        elseif (is_search()) :

            return get_page_by_path('search');

        elseif ($type || is_post_type_archive() || is_tax() || is_singular(get_post_types(['_builtin' => false]))) :

            $type = $type ?: get_post_type(); // Get current type if not definded

            if ($type_object = get_post_type_object($type)) :

                if (!is_bool($type_object->has_archive)) :
                    $rewrite_path = $type_object->has_archive;
                else :
                    if (!is_bool($type_object->rewrite)) :
                        $rewrite_path = $type_object->rewrite['slug'];
                    else :
                        $rewrite_path = $type_object->rewrite ? $type : false;
                    endif;
                endif;

                if ($taxonomy) :
                // if ($taxonomy || is_tax()) : // This gets in the way of retrieving is_post_type_archive when is_tax

                    if ($term) :
                        $rewrite_path = $rewrite_path ? sprintf('%s/%s', $rewrite_path, $term) : $rewrite_path;
                    else :
                        global $wp_query;
                        $rewrite_path = $rewrite_path ? sprintf('%s/%s', $rewrite_path, $wp_query->query[get_query_var('taxonomy')]) : $rewrite_path;
                    endif;
                endif;

                if ($rewrite_path) :
                    $page = get_page_by_path($rewrite_path);
                    $page_id = $page ? $page->ID : null;
                endif;
            endif;

        elseif (is_home() || is_archive() || is_singular('post')) :

            if ($page_for_posts = get_option('page_for_posts')) :
                $page_id = $page_for_posts;

                // if (is_category()) :
                //   $page_id = $page_for_posts;
                // endif;
            else :
                $page_id = null;
            endif;

        endif;
    endif;

    return $page_id;
}
