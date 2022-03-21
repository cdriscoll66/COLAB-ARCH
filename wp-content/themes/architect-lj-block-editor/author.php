<?php

/**
 * The template for displaying Author Archive pages
 */

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Rareloop\Lumberjack\Post;
use Timber\Timber;
use Timber\User as TimberUser;

use App\Helpers\Traits\ArchivePageContext;

class AuthorController extends Controller
{
    use ArchivePageContext;

    public function handle()
    {
        global $wp_query;
        global $paged;


        $context = Timber::get_context();
        $author = new TimberUser($wp_query->query_vars['author']);


        $context['author'] = $author;
        $context['title'] = 'Author Archives: ' . $author->name();

        $context['posts'] = Post::query([
            'author' => '$author->ID'
        ]);

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
