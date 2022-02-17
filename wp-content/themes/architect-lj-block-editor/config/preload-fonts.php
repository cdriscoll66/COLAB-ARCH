<?php

function fontpreload()
{
?>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" as="font" type="font/woff" crossorigin="anonymous">

<?php
};
add_action('wp_head', 'fontpreload');
