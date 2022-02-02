<?php

namespace App\Blocks;

use Timber\Timber;


class Testimonial extends Block
{
    /**
     * @inheritDoc
     */
    protected function alterContext(array $context): array
    {

        $context = Timber::get_context();
        // $context['posts'] = get_field('case_studies');

        // $context['posts'] = collect($context['posts'])->map(function ($post) {
        //     return new Testimonial($post);
        // });


        return $context;
    }
}
