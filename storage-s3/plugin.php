<?php

return array(
    'id' =>             'storage:s3',
    'version' =>        '0.2.1',
    'name' =>           /* trans */ 'Attachments hosted in Amazon S3',
    'author' =>         'Jared Hancock',
    'description' =>    /* trans */ 'Enables storing attachments in Amazon S3',
    'url' =>            'http://www.osticket.com/plugins/storage-s3',
    'requires' => array(
        "aws/aws-sdk-php" => array(
            'version' => "^3.181",
            'map' => array(
                'aws/aws-sdk-php/src' => 'lib/Aws',
                'guzzlehttp/guzzle/src' => 'lib/GuzzleHttp',
                'guzzlehttp/psr7/src' => 'lib/GuzzleHttp/Psr7',
                'guzzlehttp/promises/src' => 'lib/GuzzleHttp/Promise',
            ),
        ),
    ),
    'plugin' =>         'storage.php:S3StoragePlugin'
);

?>
