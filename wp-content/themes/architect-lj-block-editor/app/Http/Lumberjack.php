<?php

namespace App\Http;

use Rareloop\Lumberjack\Http\Lumberjack as LumberjackCore;
use App\Menu\Menu;

class Lumberjack extends LumberjackCore
{
    public function addToContext($context)
    {
        $context['is_home'] = is_home();
        $context['is_front_page'] = is_front_page();
        $context['is_logged_in'] = is_user_logged_in();

        // In Timber, you can use TimberMenu() to make a standard Wordpress menu available to the
        // Twig template as an object you can loop through. And once the menu becomes available to
        // the context, you can get items from it in a way that is a little smoother and more
        // versatile than Wordpress's wp_nav_menu. (You need never again rely on a
        // crazy "Walker Function!")
        $context['main_menu'] = new Menu('main-nav');
        $context['footer1'] = new Menu('footer1');
        $context['footer2'] = new Menu('footer2');
        $context['footer3'] = new Menu('footer3');
        $context['home_url'] = home_url();
        $context['site_title'] = get_bloginfo('name');
        $context['prefooter_fields'] = get_field('prefooter_fields','options');

        // Get alerts and set ID for each
        $alerts = [];
        if ($all_alerts = get_field('alerts', 'options')) {
            foreach ($all_alerts as $alert) {
                $alert['id'] = md5( $alert['text'].$alert['link']['title'].$alert['link']['url']);
                array_push($alerts, $alert);
            }
        }
        $context['alerts'] = $alerts;

        return $context;
    }
}
