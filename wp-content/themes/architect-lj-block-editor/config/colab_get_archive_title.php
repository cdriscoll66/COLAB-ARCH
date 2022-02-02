<?php

/**
 * Archive Title
 *
 * Get the title on archive templates. Supports "page_for_posts" functionality
 * on all post types.
 *
 * @TODO Consider getting taxonomy name instead of hardcoing "Category"
 * @TODO Consider adding search post_type in search results title, get_query_var('post_type')
 * @TODO Consider $args['verbose'] title variant for "Archive for" and/or "Archive for Taxonomy

 * @requires /config/colab_get_page_for_type_id.php
 *
 * @param  int $id Post ID.
 * @return string Archive Title
 */
function colab_get_archive_title($args = [])
{
    $args = wp_parse_args($args, [
        'prefix' => false,
    ]);

    $title = '';

    if (is_404()) :
        $title = __('Page Not Found', 'colab');
    elseif (is_search()) :
        $title = __('Search', 'colab');
        // $search_query = htmlspecialchars(get_search_query());
        // $title = $search_query ? sprintf(__('Search for %s'), $search_query) : __('Search', 'colab');
    elseif (is_post_type_archive()) :
        // $title = sprintf(__('Archive for %s', 'colab'), get_post_type_object(get_post_type())->labels->name);
        // $title = sprintf(__('Archive for %s', 'colab'), post_type_archive_title('', false));
        $page_id = colab_get_page_for_type_id();
        $title = $page_id ? get_the_title($page_id) : false;
        $title = $title ?: post_type_archive_title('', false);
        // $title = $title ?: get_queried_object()->label;
    elseif (is_tax()) :
        // $title = sprintf(__('Archive for %s', 'colab'), single_term_title(null, false)); // @TODO Consider getting taxonomy name instead of hardcoing "Taxonomy"
        $title = single_term_title(null, false);
        if ($args['prefix']) :
            if ($args['prefix'] === true) :
                $page_id = colab_get_page_for_type_id();
                $title = $page_id ? sprintf('%s: %s', get_the_title($page_id), $title) : $title; // Fallback no Prefix
            else :
                $title = sprintf('%s: %s', $args['prefix'], $title);
            endif;
        endif;
    elseif (is_home()) :
        $page_id = get_option('page_for_posts');
        $title = $page_id ? get_the_title($page_id) : __('Posts', 'colab');
    elseif (is_archive()) :
        if (is_author()) :
            $title = get_the_author();
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_author());
            // $title = sprintf(__('Archive for Author %s', 'colab'), get_the_author());
        elseif (is_category()) :
            $title = single_term_title(null, false);
            // $title = sprintf(__('Archive for %s', 'colab'), single_term_title(null, false));
            // $title = sprintf(__('Archive for Category %s', 'colab'), single_term_title(null, false));
            // $title = sprintf(__('Archive for Category %s', 'colab'), single_cat_title(null, false));
        elseif (is_tag()) :
            $title = single_term_title(null, false);
            // $title = sprintf(__('Archive for %s', 'colab'), single_term_title(null, false));
            // $title = sprintf(__('Archive for Tag %s', 'colab'), single_term_title(null, false));
            // $title = sprintf(__('Archive for Tag %s', 'colab'), single_tag_title(null, false));
        elseif (is_year()) :
            $title = get_the_time('Y');
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('Y'));
        elseif (is_month()) :
            $title = get_the_title(); // Use Settings > General
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_title()); // get_the_date(get_option( 'date_format' ))); // Use Settings > General
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('F, Y'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('M Y'));
        elseif (is_day()) :
            $title = get_the_date(); // Use Settings > General
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_date()); // Use Settings > General
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('l F jS, Y'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('F jS, Y'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('F j, Y'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('Y-m-d'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('m-d-Y'));
            // $title = sprintf(__('Archive for %s', 'colab'), get_the_time('m/d/Y'));
        endif;
        if ($args['prefix']) :
            if ($args['prefix'] === true) :
                $page_id = get_option('page_for_posts');
                $title = $page_id ? sprintf('%s: %s', get_the_title($page_id), $title) : $title; // Fallback no Prefix
            else :
                $title = sprintf('%s: %s', $args['prefix'], $title);
            endif;
        endif;
    endif;

    return $title;
}
