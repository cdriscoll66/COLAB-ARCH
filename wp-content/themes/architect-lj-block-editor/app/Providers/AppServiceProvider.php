<?php

namespace App\Providers;

// use Rareloop\Lumberjack\Post;
use Rareloop\Lumberjack\Providers\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any app specific items into the container
     */
    public function register()
    {

    }

    /**
     * Perform any additional boot required for this application
     */
    public function boot()
    {
        // Post::macro('title', function () {
        //     return $this->post_title ?: __('(no title)', 'colab');
        // });

        // Post::macro('image', function () {
        //     return get_colab_archive_image($this);
        // });

        // Post::macro('excerpt', function () {
        //     return apply_filters('the_content', get_the_excerpt($this));
        // });
    }
}
