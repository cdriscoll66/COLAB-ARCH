<?php

namespace App\PostTypes;

use Rareloop\Lumberjack\Post as LumberjackPost;

use App\Helpers\Traits\Excerpt;
use App\Helpers\Traits\Title;

// class Post extends TimberPost
class Post extends LumberjackPost
{
    use Excerpt;
    use Title;

    /**
     * @return Array WP_Term objects
     */
    // public function categories () {
    //     // return get_the_category($this->id);
    //     return get_the_terms($this->id, 'category');
    // }

    /**
     * @return Object WP_Term
     */
    // public function category () {
    //     return self::primaryTermObject('category', $this->id);
    // }

    public function authorgroup()
    {
        $authorgroup = get_coauthors($this->ID);
        $authorlinks = '';
        foreach($authorgroup as $i => $author ) {

            $authorlink = '';


            if (count($authorgroup) > 1) {
            if ($i === array_key_last($authorgroup)) {
                $authorlink .= ' and ';
                }
            elseif ($i !== array_key_first($authorgroup) ) {
                $authorlink .= ', ';
                }
            }

            $authorlink .= '<a href="';
            $authorlink .= get_author_posts_url($author->ID);
            $authorlink .= '">';
            $authorlink .= $author->user_nicename;
            $authorlink .= '</a>';

            $authorlinks .= $authorlink;
        }

        return $authorlinks;
    }

}
