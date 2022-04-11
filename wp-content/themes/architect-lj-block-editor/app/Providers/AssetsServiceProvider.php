<?php

namespace App\Providers;

use Rareloop\Lumberjack\Providers\ServiceProvider;
use App\Helpers\Theme;

class AssetsServiceProvider extends ServiceProvider
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
        add_action('wp_enqueue_scripts', function () {

            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', [], false);
            wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons&display=swap', [], false);


            wp_enqueue_style('lumberjack/theme.css', Theme::mix('/styles/theme.css'), [], false);
            wp_enqueue_script('lumberjack/theme.js', Theme::mix('/scripts/theme.js'), ['jquery'], false, true);

            // global $post;
            wp_dequeue_style('enlighterjs');


            // $blocks = parse_blocks( $post->post_content );

            // printf("\n<pre class=\"debug\">%s</pre>\n", var_export($blocks, true));

        }, 100);

        add_action('login_enqueue_scripts', function () {
            wp_enqueue_style('lumberjack/login.css', Theme::mix('/styles/login.css'), [], false);
            wp_enqueue_script('lumberjack/login.js', Theme::mix('/scripts/login.js'), ['jquery'], false, true);
        });

        add_action('admin_enqueue_scripts', function () {

            /**
             * Fonts
             */
            wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap', [], false);
            wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], false);

            wp_enqueue_style('lumberjack/admin.css', Theme::mix('/styles/admin.css'), [], false);
            // wp_enqueue_script('lumberjack/admin.js', Theme::mix('/scripts/admin.js'), ['jquery', 'wp-blocks'], false, true);
        });

        add_action('enqueue_block_editor_assets', function () {
            wp_enqueue_script('lumberjack/blocks.js', Theme::mix('/scripts/blocks.js'), ['wp-blocks', 'wp-dom-ready', 'wp-edit-post'], false, true);
            // wp_localize_script('lumberjack/blocks.js', 'blocksAllowed', apply_filters('colab_blocks_localized_data', []));
        });
    }
}
