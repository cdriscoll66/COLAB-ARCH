<?php

/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

namespace App;



use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Timber\Timber;

use App\Helpers\Traits\ArchivePageContext;
class ArchiveController extends Controller
{

    use ArchivePageContext;


    public function handle()
    {
        global $paged;
        $context = Timber::get_context();
        $context['title'] = 'Archive';

        if (is_day()) {
            $context['title'] = 'Archive: ' . get_the_date('D M Y');
        } elseif (is_month()) {
            $context['title'] = 'Archive: ' . get_the_date('M Y');
        } elseif (is_year()) {
            $context['title'] = 'Archive: ' . get_the_date('Y');
        } elseif (is_tag()) {
            $context['title'] = single_tag_title('', false);
        } elseif (is_category()) {
            $context['title'] = single_cat_title('', false);
        } elseif (is_post_type_archive()) {
            $context['title'] = post_type_archive_title('', false);
        }


        $context = Timber::get_context();
        // $context = $this->getArchivePageContext($context);

        $context['paged'] = $paged;

        $context['posts'] = collect($context['posts'])->map(function ($post) {
            return new \App\PostTypes\Post($post);
        });

        $context['pagination'] = get_posts_nav_link([
            'sep'      => '',
            'prelabel' => __( 'Newer Posts' ),
            'nxtlabel' => __( 'Older Posts' ),
        ]);

        $context['pagination'] = [];
        $context['pagination']['prev'] = get_previous_posts_link('Newer posts');
        $context['pagination']['next'] = get_next_posts_link('Older posts');


        return new TimberResponse('templates/posts.twig', $context);
    }
}
