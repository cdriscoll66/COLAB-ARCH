<?php

function fontpreload()
{
?>
<!-- connect to domain of font files -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- optionally increase loading priority -->
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
<link rel="preload" as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap">

<!-- async CSS -->
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap">

<!-- no-JS fallback -->
<noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons&display=swap">
</noscript>
<?php
};
add_action('wp_head', 'fontpreload');
