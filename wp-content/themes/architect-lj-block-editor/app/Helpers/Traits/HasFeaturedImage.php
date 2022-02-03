<?php

namespace App\Helpers\Traits;

trait HasFeaturedImage
{
    public function hasFeaturedImage()
    {
        $has_featured_image = has_post_thumbnail($this->id);

        return $has_featured_image;
    }

    public function getCompanyImage()
    {
        $image = get_the_post_thumbnail($this->id, 'company');

        return $image;
    }


}
