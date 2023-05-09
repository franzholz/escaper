<?php

########################################################################
# Extension Manager/Repository config file for ext "escaper".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Laminas Escaper XSS Library',
    'description'      => 'This provides the Laminas Escaper XSS prevention library.',
    'category'         => 'misc',
    'version'          => '2.12.0',
    'state'            => 'stable',
    'clearcacheonload' => 1,
    'author'           => 'Laminas Escaper developers, Franz Holzinger',
    'author_email'     => 'franz@ttproducts.de',
    'author_company'   => 'jambage.com',
    'constraints'      => [
        'depends'   => [
            'typo3' => '10.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests'  => [
        ],
    ],
];
