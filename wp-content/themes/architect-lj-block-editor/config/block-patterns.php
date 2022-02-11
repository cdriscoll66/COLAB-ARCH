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

register_block_pattern('custom/three-up-cards', [
    'categories' => ['custom'],
    'title' => __('Three-up Cards', 'colab'),
    'description' => _x('Three-up Cards Block Pattern.', 'Block pattern description', 'colab'),
    'content' => '
    <!-- wp:group {"align":"wide","className":"is-style-p-section"} -->
    <div class="wp-block-group alignwide is-style-p-section"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"2rem"}},"textColor":"green-primary"} -->
    <h2 class="has-text-align-center has-green-primary-color has-text-color" style="font-size:2rem"><strong>Why self-service deployments</strong></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","className":"mb-5"} -->
    <p class="has-text-align-center mb-5">Developers have a natural DIY mentality, and helping them deploy themselves makes them happier and more productive.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":137,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://release-architectio.pantheonsite.io/wp-content/uploads/2022/01/faster-releases.png" alt="" class="wp-image-137" width="120" height="120"/></figure></div>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"1.3rem"}},"className":"mb-0 font-weight-regular"} -->
    <h6 class="has-text-align-center mb-0 font-weight-regular" style="font-size:1.3rem">Faster releases</h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Developers wrote the code, so they are primed to know when its ready for release. Remove the steps in between and let them deploy directly for faster release times.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":142,"width":104,"height":120,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://release-architectio.pantheonsite.io/wp-content/uploads/2022/01/no-context-switching.png" alt="" class="wp-image-142" width="104" height="120"/></figure></div>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"1.3rem"}},"className":"mb-0 font-weight-regular"} -->
    <h6 class="has-text-align-center mb-0 font-weight-regular" style="font-size:1.3rem">No context switching</h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">It can be costly to have developers constantly jumping from task to task. After filing a ticket to have a release scheduled by DevOps, developers are forced onto other tasks temporarily only to jump right back in once the deployment is finalized for testing.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:image {"align":"center","id":136,"height":120,"sizeSlug":"full","linkDestination":"none"} -->
    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="https://release-architectio.pantheonsite.io/wp-content/uploads/2022/01/failure-remediation.png" alt="" class="wp-image-136" height="120"/></figure></div>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontSize":"1.3rem"}},"className":"mb-0 font-weight-regular"} -->
    <h6 class="has-text-align-center mb-0 font-weight-regular" style="font-size:1.3rem">Quick failure remediation</h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Developers who wrote the product features are the best equipped to test releases. With developers also responsible for deploying their own changes, theyre primed and ready to address any unexpected failures.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    ',
]);

register_block_pattern('custom/curved-header', [
    'categories' => ['custom'],
    'title' => __('Curved Page Header', 'colab'),
    'description' => _x('Curved Page Header Block Pattern (like the Pricing page)', 'Block pattern description', 'colab'),
    'content' => '
        <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(226deg,rgba(0,155,141,0.16) 0%,rgba(0,192,109,0.11) 100%)"}},"className":"is-style-p-lg-section"} -->
        <div class="wp-block-group alignfull is-style-p-lg-section has-background" style="background:linear-gradient(226deg,rgba(0,155,141,0.16) 0%,rgba(0,192,109,0.11) 100%)"><!-- wp:heading {"textAlign":"center","level":1} -->
        <h1 class="has-text-align-center">[Headline Goes Here]</h1>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
        <h2 class="has-text-align-center has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac nibh sit amet dui lobortis vehicula sed a nulla.</h2>
        <!-- /wp:heading -->

        <!-- wp:separator {"align":"full","className":"is-style-curved-bottom"} -->
        <hr class="wp-block-separator alignfull is-style-curved-bottom"/>
        <!-- /wp:separator --></div>
        <!-- /wp:group -->
    ',
]);

register_block_pattern('custom/page-header', [
    'categories' => ['custom'],
    'title' => __('Page Header', 'colab'),
    'description' => _x('This is the "standard" page header block pattern.', 'Block pattern description', 'colab'),
    'content' => '
        <!-- wp:cover {"gradient":"green-to-transparent","align":"full","className":"is-style-p-section"} -->
        <div class="wp-block-cover alignfull has-background-dim has-background-gradient has-green-to-transparent-gradient-background is-style-p-section"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"gray-text"} -->
        <h1 class="has-text-align-center has-gray-text-color has-text-color">[Headline Goes Here]</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"gray-text"} -->
        <p class="has-text-align-center has-gray-text-color has-text-color has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <!-- /wp:paragraph --></div></div>
        <!-- /wp:cover -->
    ',
]);

register_block_pattern('custom/home-hero', [
    'categories' => ['custom'],
    'title' => __('Home Hero', 'colab'),
    'description' => _x('This is the Home Hero block pattern.', 'Block pattern description', 'colab'),
    'content' => '
        <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(226deg,rgba(0,155,141,0.16) 0%,rgba(0,192,109,0.11) 100%)"}},"className":"is-style-p-section"} -->
        <div class="wp-block-group alignfull is-style-p-section has-background" style="background:linear-gradient(226deg,rgba(0,155,141,0.16) 0%,rgba(0,192,109,0.11) 100%)"><!-- wp:media-text {"mediaPosition":"right","mediaId":22,"mediaLink":"https://architectio.lndo.site/devops-supercharged/hero-computer-screen/","mediaType":"image","mediaWidth":40,"className":"p-lg-section"} -->
        <div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile p-lg-section" style="grid-template-columns:auto 40%"><figure class="wp-block-media-text__media"><img src="https://architectio.lndo.site/wp-content/uploads/2022/01/hero-computer-screen.webp" alt="" class="wp-image-22 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2.8rem"}}} -->
        <h1 style="font-size:2.8rem">Previews, production, and everything in between</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.3rem"}},"className":"line-height-lg"} -->
        <p class="line-height-lg" style="font-size:1.3rem">Democratize deployments and environment creation with our dependency-aware continuous delivery platform</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link">Get Started For Free</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons -->

        </div></div>
        <!-- /wp:media-text -->

        <!-- wp:separator {"align":"full","className":"is-style-curved-bottom"} -->
        <hr class="wp-block-separator alignfull is-style-curved-bottom"/>
        <!-- /wp:separator --></div>
        <!-- /wp:group -->
    ',
]);

