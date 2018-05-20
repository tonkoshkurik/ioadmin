<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public).
    |
    */
    'dir' => ['uploads'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem disks (Flysytem)
    |--------------------------------------------------------------------------
    |
    | Define an array of Filesystem disks, which use Flysystem.
    | You can set extra options, example:
    |
    | 'my-disk' => [
    |        'URL' => url('to/disk'),
    |        'alias' => 'Local storage',
    |    ]
    */
    'disks' => [
        // 'uploads',
    ],

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */

    'route' => [
        'prefix'     => config('backpack.base.route_prefix', 'admin').'/elfinder',
        'middleware' => ['web', config('backpack.base.middleware_key', 'admin')], //Set to null to disable middleware filter
    ],

    /*
    |--------------------------------------------------------------------------
    | Access filter
    |--------------------------------------------------------------------------
    |
    | Filter callback to check the files
    |
    */

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */

    'roots' => null,

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with 'roots' and passed to the Connector.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1
    |
    */

    'options' => [
        		// 'bind' => array(
            	// 		'upload.presave' => array(
            	// 			'Plugin.AutoResize.onUpLoadPreSave'
            	// 		)
            	// 	),
            	// 	// global configure (optional)
            	// 	'plugin' => array(
            	// 		'AutoResize' => array(
            	// 			'enable'         => true,       // For control by volume driver
            	// 			'maxWidth'       => 1024,       // Path to Water mark image
            	// 			'maxHeight'      => 1024,       // Margin right pixel
            	// 			'quality'        => 95,         // JPEG image save quality
            	// 			'preserveExif'   => false,      // Preserve EXIF data (Imagick only)
            	// 			'forceEffect'    => false,      // For change quality or make progressive JPEG of small images
            	// 			'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
            	// 			'offDropWith'    => null,       // Enabled by default. To disable it if it is dropped with pressing the meta key
            	// 			                                // Alt: 8, Ctrl: 4, Meta: 2, Shift: 1 - sum of each value
            	// 			                                // In case of using any key, specify it as an array
            	// 			'onDropWith'     => null        // Disabled by default. To enable it if it is dropped with pressing the meta key
            	// 			                                // Alt: 8, Ctrl: 4, Meta: 2, Shift: 1 - sum of each value
            	// 			                                // In case of using any key, specify it as an array
            	// 		)
            	// 	),
    ],

];
