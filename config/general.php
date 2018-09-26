<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */


/** HTTP TO HTTPS redirect without any changes in the template or any other file - TO BE TESTED
* Ensure our urls have the right scheme
* define('URI_SCHEME',  ( isset($_SERVER['HTTPS'] ) ) ? "https://" : "http://" );
* The site url
* define('SITE_URL',    URI_SCHEME . $_SERVER['SERVER_NAME'] . '/');
**/
// the unix timestamp on which the style.css file has been uploaded the last time - used to bust caching for the last uploaded version of the css file
define('CSSTIME', ('t='. filemtime('../www/css/style.css')));
//define('FILEMTIME',  date(U)) ;
// the unix timestamp on which the webflow.js file has been uploaded the last time - used to bust caching for the last uploaded version of the js file
define('JSTIME', ('t='. filemtime('../www/js/webflow.js')));


return [
    // Global settings



    '*' => [
        'cssTimestamp' => CSSTIME,
        'cssVersion' => '1.0',
        'jsTimestamp' => JSTIME,
        'jsVersion' => '1.0',
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 0,
        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,
        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,
        // Control Panel trigger word
        'cpTrigger' => 'beresterk',
        'extraAllowedFileExtensions' => 'json',
        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),
        'phpMaxMemoryLimit' => '512M',
    ],

    // Dev environment settings
    '.webhosting.be' => [
        // Dev Mode (see https://craftcms.com/support/dev-mode)
        'devMode' => true,
        // Base site URL
        'siteUrl' => 'beresterkebasisbe.webhosting.be/',

        'aliases' => [
            '@basePath' => '/data/sites/web/beresterkebasisbe/www/assets',
            '@baseUrl' => 'beresterkebasisbe.webhosting.be/',
        ],

    ],

    // Staging environment settings
    '.be' => [
        'siteUrl' => 'beresterkebasis.be/',
        // Base site URL
        'aliases' => [
            '@basePath' => '/data/sites/web/beresterkebasisbe/www/assets',
            '@baseUrl' => 'http://beresterkebasis.be/',
        ],
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];
