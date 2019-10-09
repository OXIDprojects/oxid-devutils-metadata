<?php

$sMetadataVersion = '2.1';
$aModule = [
    'id'          => 'devutils-metadata',
    'title'       => '[devutils] module metadata',
    'description' => 'show cached module metadata from database and resetting metadata entries',
    'version'     => '1.0.0',
    'author'      => 'OXID Community',
    'email'       => '',
    'url'         => 'https://github.com/OXIDprojects/oxid-devutils-metadata',
    'controllers' => [
        'dev_metadata'       => OxidCommunity\DevutilsMetadata\Controller\Admin\Metadata::class,
        'devmodule_metadata' => OxidCommunity\DevutilsMetadata\Controller\Admin\ModuleMetadata::class,
    ],
    'templates'   => [
        'dev_metadata.tpl'       => 'oxid-community/devutils-metadata/views/admin/dev_metadata.tpl',
        'devmodule_metadata.tpl' => 'oxid-community/devutils-metadata/views/admin/devmodule_metadata.tpl',
    ],
];
