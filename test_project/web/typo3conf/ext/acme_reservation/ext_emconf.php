<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "acme_reservation"
 *
 * Auto generated by Extension Builder 2018-12-15
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Acme Reservation',
    'description' => 'Extension für Reservierung in einem Restaurant',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'WebitDe\\AcmeReservation\\' => 'Classes',
        ],
    ],
];
