<?php

function fontpreload()
{
?>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700" as="style" display="swap" onload="this.onload=null;this.rel='stylesheet'" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/icon?family=Material+Icons" as="font" display="swap" crossorigin="anonymous">
    <noscript>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700"
        rel="stylesheet"
        type="text/css"
    />
</noscript>
<?php
};
add_action('wp_head', 'fontpreload');
