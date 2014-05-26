<?php

// Paths
define('ARLIMA_PLUGIN_PATH', dirname(__FILE__));
define('ARLIMA_PLUGIN_URL', plugin_dir_url(__FILE__));

// dev-mode will load the uncompressed js files and compile less file in the browser
defined('ARLIMA_DEV_MODE')
    or define('ARLIMA_DEV_MODE', false);

// Make it possible to use pre-compiled less even though in dev-mode
defined('ARLIMA_COMPILE_LESS_IN_BROWSER')
    or define('ARLIMA_COMPILE_LESS_IN_BROWSER', ARLIMA_DEV_MODE);

// Plugin version (only edit this via grunt!)
define('ARLIMA_FILE_VERSION', '3.0.beta.31' .(ARLIMA_DEV_MODE ? '__'.time():''));

// Which type of tag to use for images in Arlima RSS feeds
defined('ARLIMA_RSS_IMG_TAG')
    or define('ARLIMA_RSS_IMG_TAG', 'enclosure');

// Whether or not you should be able to set templates on section dividers
defined('ARLIMA_SUPPORT_SECTION_DIV_TEMPLATES')
    or define('ARLIMA_SUPPORT_SECTION_DIV_TEMPLATES', false);

// Whether or not arlima should apply its own logic for grouping child articles
// when rendering article lists
defined('ARLIMA_GROUP_CHILD_ARTICLES')
    or define('ARLIMA_GROUP_CHILD_ARTICLES', true);


defined('ARLIMA_SEND_JS_ERROR_TO_LOG')
    or define('ARLIMA_SEND_JS_ERROR_TO_LOG', false);