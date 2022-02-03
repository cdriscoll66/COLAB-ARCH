<?php

namespace App\Blocks;
use App\PostTypes\Testimonial;

use Timber\Timber;


class Testimonials extends Block
{
    /**
     * @inheritDoc
     */
    protected function alterContext(array $context): array
    {

        $context = Timber::get_context();
        $context['testimonials'] = Testimonial::builder()
        ->limit(-1)
        ->get();


        return $context;
    }
}
