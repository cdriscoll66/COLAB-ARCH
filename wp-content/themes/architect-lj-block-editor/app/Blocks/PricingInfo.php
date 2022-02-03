<?php

namespace App\Blocks;

use Timber\Timber;


class PricingInfo extends Block
{
    /**
     * @inheritDoc
     */
    protected function alterContext(array $context): array
    {

        $context = Timber::get_context();

        $context['fields'] = [];
        $context['fields']['check'] = get_field('pricing-check');
        $context['fields']['title'] = get_field('pricing-title');
        $context['fields']['tooltip'] = get_field('pricing-tooltip');

        return $context;
    }
}
