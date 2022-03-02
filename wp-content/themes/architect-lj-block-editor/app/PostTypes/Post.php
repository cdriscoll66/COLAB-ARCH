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
}
