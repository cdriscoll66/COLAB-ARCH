<?php

namespace App\Traits;

trait ArchivePageContext
{
    /**
     * Get Archive Page Context
     *
     * @param Array $context array
     * @param Int $id Post ID
     * @return Array Modified $context array
     */
    public function getArchivePageContext(array $context, int $id = null) : array
    {
        global $paged;

        $id = $id ?: colab_get_page_for_type_id();

        // if ($id && !$paged && (is_home() || is_post_type_archive())) :
        if ($id && (is_home() || is_archive())) :
            $post = new \App\PostTypes\Page(get_post($id));
            $context['post'] = $post;
            $context['title'] = $post->title;
            $context['excerpt'] = apply_filters('the_content', $post->post_excerpt ?: get_the_excerpt($id));
            $context['content'] = apply_filters('the_content', $post->post_content);
        elseif (is_category() || is_tax() || is_author()) :
            $context['title'] = colab_get_archive_title(['prefix' => true]);
            $context['excerpt'] = apply_filters('the_content', term_description(get_queried_object()->term_id));
        else :
            $context['title'] = colab_get_archive_title();
        endif;

        $context['paged'] = $paged;

        // $context['link'] = get_the_permalink($id);

        // $context['loop_vars'] = [
        //     'classes' => 'o-post-cards o-post-cards--three-column',
        //     'card' => 'partials/post-card.twig',
        //     'show_pagination' => true,
        // ];

        // if ($context['prefooter'] = get_field('prefooter_enable', $id)) {
        //     $context['prefooter'] = [];
        //     /** Explictly Defined Presets */
        //     $prefooter_preset = get_field('prefooter_preset', $id);
        //     if ($prefooter_preset == 'custom') {
        //         $context['prefooter'] = get_field('prefooter_custom', $id);
        //     }
        //     else {
        //         $context['prefooter'] = get_field('prefooter_global', 'options');
        //     }

        //     if (!empty($context['prefooter'])) {
        //         $context['prefooter']['image'] = wp_get_attachment_image($context['prefooter']['image'], 'full'); // @fixme set crop

        //         if (!empty($context['prefooter']['buttons'])) {
        //             $context['prefooter']['buttons'] = array_map('end', $context['prefooter']['buttons']); // Unnest repeater array
        //             $context['prefooter']['buttons'] = array_map('colab_get_link_title_with_fallback', $context['prefooter']['buttons']);
        //         }
        //     }
        //     $context['prefooter'] = array_filter($context['prefooter']);
        // }

        return $context;
    }

}
