<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Mailchimp subscription',
    'description' => 'Simple MailChimp integration to let users register to a specific list',
    'category' => 'plugin',
    'author' => 'Georg Ringer',
    'author_email' => 'g.ringer@supseven.at',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '3.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'typoscript_rendering' => '1.0.5-2.99.999'
        ],
    ],
];
