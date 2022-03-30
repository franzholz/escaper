<?php

########################################################################
# Extension Manager/Repository config file for ext "escaper".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Laminas Escaper XSS Library',
    'description'      => 'This provides the Laminas Escaper XSS prevention library.',
    'category'         => 'misc',
    'version'          => '2.10.0',
    'state'            => 'stable',
    'clearcacheonload' => 1,
    'author'           => 'Laminas Escaper developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'php'   => '7.3.0-8.1.99',
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
        ],
    ],
];
