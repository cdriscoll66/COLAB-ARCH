<?php
/**
 * Remove Core Block Patterns
 */
remove_theme_support('core-block-patterns');

/**
 * Register Block Pattern Categories
 *
 * @notice If you remove core-block-patterns you must register a block category
 * if you intend to register custom patterns.
 */
register_block_pattern_category('custom', [
    'label' => __('Custom', 'colab'),
]);

/**
 * Register Block Patterns
 */
// register_block_pattern('custom/example-pattern', [
//     'categories' => ['custom'],
//     'title' => __('Example Pattern', 'colab'),
//     'description' => _x('This is an example block pattern.', 'Block pattern description', 'colab'),
//     'content' => '
//         <!-- wp:group -->
//         <div class="wp-block-group"><div class="wp-block-group__inner-container">
//
//         <!-- wp:heading {"level":2} -->
//         <h2>Lorem Ipsum Dolor Amet</h2>
//         <!-- /wp:heading -->
//
//         </div></div>
//         <!-- /wp:group -->
//     ',
// ]);
register_block_pattern('custom/accordion-block', [
    'categories' => ['custom'],
    'title' => __('Accordion Pattern', 'colab'),
    'description' => _x('This is the accordion block from the homepage.', 'Block pattern description', 'colab'),
    'content' => '
    <!-- wp:group {"tagName":"section","align":"wide","className":"o-accordion"} -->
    <section class="wp-block-group alignwide o-accordion"><!-- wp:columns {"align":"full","className":"open"} -->
    <div class="wp-block-columns alignfull open"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
    <h3 class="has-medium-font-size">Code Block Accordion</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum nulla ut tortor elementum, quis laoreet lectus sodales. Proin interdum commodo dui in lobortis. Sed ut risus non ipsum aliquet ultrices at et ligula. Proin non ex nec elit convallis consectetur. Sed venenatis, ante et ullamcorper facilisis, ex metus bibendum erat, eget imperdiet odio magna eu ante. Etiam tristique bibendum augue quis finibus. Integer et pellentesque enim. Fusce et ultricies magna, id mollis mi.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
    <div class="wp-block-button is-style-arrow"><a class="wp-block-button__link" href="#">Learn more</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:enlighter/codeblock {"language":"powershell","theme":"wpcustom","linenumbers":"false"} -->
    <pre class="EnlighterJSRAW" data-enlighter-language="powershell" data-enlighter-theme="wpcustom" data-enlighter-highlight="" data-enlighter-linenumbers="false" data-enlighter-lineoffset="" data-enlighter-title="" data-enlighter-group="">
    # Describe services, cronjobs, and more in a declarative
    # format as simple as docker-compose
    services:
      auth:
        build:
          context: ./auth-service
        interfaces:
          rest:
            port: 8080
        environment:
          LOG_LEVEL: info

      api:
        build:
          context: ./api-service
        interfaces:
          rest:
            port: 8081</pre>
    <!-- /wp:enlighter/codeblock --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"full"} -->
    <div class="wp-block-columns alignfull"><!-- wp:column -->
    <div class="wp-block-column">
    <!-- wp:heading {"level":3,"fontSize":"medium"} -->
    <h3 class="has-medium-font-size">Image Accordion</h3>
    <!-- /wp:heading -->



    <!-- wp:paragraph -->
    <p>Aliquam semper mattis turpis, non venenatis mauris venenatis vitae. Vestibulum imperdiet pretium lobortis. Donec ac libero faucibus, porttitor arcu in, ornare augue. Etiam eget volutpat lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum sed euismod nibh. Aliquam erat volutpat.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
    <div class="wp-block-button is-style-arrow"><a class="wp-block-button__link" href="#">Learn more</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image -->
    <figure class="wp-block-image"><img src="https://www.architect.io/img/styled-screenshots/marquee@2x.png" alt="hero"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></section>
    <!-- /wp:group -->
    ',
]);

