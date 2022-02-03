<?php

return [
    /**
     * List of image sizes to register, each image size looks like:
     *     [
     *         'name' => 'thumb'
     *         'width' => 100,
     *         'height' => 200,
     *         'crop' => true,
     *     ]
     */
    'sizes' => [
        [
            'name' => 'profile',
            'width' => 40,
            'height' => 40,
            'crop' => true,
        ],
        [
            'name' => 'company',
            'width' => 150,
            'height' => 150,
            'crop' => false
        ],
    ],
];
