<?php
/**
 * Created by PhpStorm.
 * User: danielcampos
 * Date: 8/2/15
 * Time: 1:55 PM
 */


/*
return [
    'title' => 'Dev Boost',
    'posts_per_page' => 5,
    'uploads' => [

        'storage' => 'local',
        'webpath' => '/uploads',
    ],
];
*/


return [
    'title' > 'Dev Boost',
    'posts_per_page' => 5,
    'uploads' => [
        'storage' => 's3',
        'webpath' => 'developboost.s3-website-us-east-1.amazonaws.com'
    ],
];
