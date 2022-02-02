<?php

namespace App\Traits;

trait Title
{
    /**
     * Get Title
     *
     * @return String
     *
     * @use
     * {{ post.title }}
     */
    public function title()
    {
        return $this->post_title ?: __('(no title)', 'colab');
    }
}
