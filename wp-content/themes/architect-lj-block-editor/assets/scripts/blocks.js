/**
 * Add Styles to blocks
 *
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
wp.domReady(() => {
    /**
     * Block Styles
     *
     * Add/Remove Block Styles
     */
    (function () {
        wp.blocks.registerBlockStyle("core/cover", [
            {
                name: "p-section",
                label: "Padding (Vertical)",
                isDefault: false,
            },
            {
                name: "p-lg-section",
                label: "Padding Large (Vertical)",
                isDefault: false,
            },
        ]);
        wp.blocks.registerBlockStyle("core/columns", [
            {
                name: "p-section",
                label: "Padding (Vertical)",
                isDefault: false,
            },
            {
                name: "p-lg-section",
                label: "Padding Large (Vertical)",
                isDefault: false,
            },
        ]);
        wp.blocks.registerBlockStyle("core/group", [
            {
                name: "p-section",
                label: "Padding (Vertical)",
                isDefault: false,
            },
            {
                name: "p-lg-section",
                label: "Padding Large (Vertical)",
                isDefault: false,
            },
        ]);

        wp.blocks.registerBlockStyle("core/column", [
            {
                name: "shadow-round",
                label: "Rounded Drop Shadow",
                isDefault: false,
            },
        ]);

        wp.blocks.registerBlockStyle("core/media-text", [
            {
                name: "rev-col-mobile",
                label: "Reverse Column (on Mobile)",
                isDefault: false,
            },
        ]);

        wp.blocks.unregisterBlockStyle("core/button", ["fill", "outline"]);

        wp.blocks.registerBlockStyle("core/button", [
            {
                name: "primary",
                label: "Primary",
                isDefault: true,
            },
            {
                name: "secondary",
                label: "Secondary",
                isDefault: false,
            },
            {
                name: "outline",
                label: "Outline",
                isDefault: false,
            },
            {
                name: "arrow",
                label: "Arrow",
                isDefault: false,
            },
        ]);

        wp.blocks.registerBlockStyle("core/separator", [
            {
                name: "curved-bottom",
                label: "Curved Bottom",
                isDefault: false,
            },
            {
                name: "primary-divider",
                label: "Primary Divider",
                isDefault: false,
            },
        ]);
    })();

    /**
     * Blocks Allowed
     *
     * @see /config/blocks-allowed.php
     *
     * @TODO Repair blacklist exclusion for ACF blocks
     */
    // (function () {
    //   let whitelist = blocksAllowed && blocksAllowed.whitelist ? blocksAllowed.whitelist : null;
    //   let blacklist = blocksAllowed && blocksAllowed.blacklist ? blocksAllowed.blacklist : null;

    //   if (whitelist.length || blacklist.length) {
    //     wp.blocks.getBlockTypes().forEach(block => {

    //       if (whitelist.indexOf(block.name) === -1) {
    //         wp.blocks.unregisterBlockType(block.name);
    //       }

    //       if (blacklist.indexOf(block.name) !== -1) {
    //         wp.blocks.unregisterBlockType(block.name);
    //       }
    //     });
    //   }
    // })();
});
