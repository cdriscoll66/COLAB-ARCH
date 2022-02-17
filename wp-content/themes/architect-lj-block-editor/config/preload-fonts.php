<?php

function fontpreload()
{
?>

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700" as="font" display="swap" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/icon?family=Material+Icons" as="font" display="swap" crossorigin="anonymous">

<?php
};
add_action('wp_head', 'fontpreload');
