<?php

/**
 * Extension Manager/Repository config file for ext "t3_message_queue".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Message Queue',
    'description' => 'Message queue extension based on Symfony Messenger',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'BeFlo\\T3MessageQueue\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Peters',
    'author_email' => 'info@t3tech.de',
    'author_company' => 'Be Flo',
    'version' => '1.0.0',
];
