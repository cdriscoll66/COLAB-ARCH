<?php

namespace App;

use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Timber\Timber;

use App\Helpers\Traits\ArchivePageContext;

class HomeController extends Controller
{
    use ArchivePageContext;

    public function handle()
    {
        global $paged;

        $context = Timber::get_context();
        $context = $this->getArchivePageContext($context);

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

        return new TimberResponse('templates/home.twig', $context);
    }
}
