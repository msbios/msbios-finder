<?php

/**
 * CKFinder Configuration File
 * For the official documentation visit http://docs.cksource.com/ckfinder3-php/
 *
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Finder;

return [

    'service_manager' => [
        'factories' => [
            Module::class => Factory\ModuleFactory::class
        ]
    ],

    Module::class => [
        /**
         *
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_authentication
         */
        'authentication' => true,

        /**
         *
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_licenseKey
         */
        'licenseName' => '',
        'licenseKey' => '',

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_privateDir
         */
        'privateDir' => [
            'backend' => 'default',
            'tags' => '.ckfinder/tags',
            'logs' => '.ckfinder/logs',
            'cache' => '.ckfinder/cache',
            'thumbs' => '.ckfinder/cache/thumbs',
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_images
         */
        'images' => [
            'maxWidth' => 1600,
            'maxHeight' => 1200,
            'quality' => 80,
            'sizes' => [
                'small' => ['width' => 480, 'height' => 320, 'quality' => 80],
                'medium' => ['width' => 600, 'height' => 480, 'quality' => 80],
                'large' => ['width' => 800, 'height' => 600, 'quality' => 80]
            ]
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_backends
         */
        'backends' => [
            [
                'name' => 'default',
                'adapter' => 'local',
                'baseUrl' => 'userfiles',
                'chmodFiles' => 0777,
                'chmodFolders' => 0755,
                'filesystemEncoding' => 'UTF-8',
            ]
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_resourceTypes
         */
        'defaultResourceTypes' => '',
        'resourceTypes' => [
            [
                'name' => 'Files', // Single quotes not allowed.
                'directory' => 'files',
                'maxSize' => 0,
                'allowedExtensions' => implode(',', [
                    '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods',
                    'odt,pdf,png,ppt,pptx,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt',
                    'vsd,wav,wma,wmv,xls,xlsx,zip'
                ]),
                'deniedExtensions' => '',
                'backend' => 'default'
            ],
            [
                'name' => 'Images',
                'directory' => 'images',
                'maxSize' => 0,
                'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
                'deniedExtensions' => '',
                'backend' => 'default'
            ]
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_roleSessionVar
         */
        'roleSessionVar' => 'CKFinder_UserRole',

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_accessControl
         */
        'accessControl' => [
            [
                'role' => '*',
                'resourceType' => '*',
                'folder' => '/',

                'FOLDER_VIEW' => true,
                'FOLDER_CREATE' => true,
                'FOLDER_RENAME' => true,
                'FOLDER_DELETE' => true,

                'FILE_VIEW' => true,
                'FILE_CREATE' => true,
                'FILE_RENAME' => true,
                'FILE_DELETE' => true,

                'IMAGE_RESIZE' => true,
                'IMAGE_RESIZE_CUSTOM' => true
            ]
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html
         */
        'overwriteOnUpload' => false,
        'checkDoubleExtension' => true,
        'disallowUnsafeCharacters' => false,
        'secureImageUploads' => true,
        'checkSizeAfterScaling' => true,
        'htmlExtensions' => ['html', 'htm', 'xml', 'js'],
        'hideFolders' => ['.*', 'CVS', '__thumbs'],
        'hideFiles' => ['.*'],
        'forceAscii' => false,
        'xSendfile' => false,

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_debug
         */
        'debug' => false,

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_plugins
         */
        'pluginsDirectory' => __DIR__ . '/../plugins',
        'plugins' => [],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_cache
         */
        'cache' => [
            'imagePreview' => 24 * 3600,
            'thumbnails' => 24 * 3600 * 365,
            'proxyCommand' => 0
        ],

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_tempDirectory
         */
        'tempDirectory' => sys_get_temp_dir(),

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_sessionWriteClose
         */
        'sessionWriteClose' => true,

        /**
         * @link http://docs.cksource.com/ckfinder3-php/configuration.html#configuration_options_csrfProtection
         */
        'csrfProtection' => true
    ]
];
