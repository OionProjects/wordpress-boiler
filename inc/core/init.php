<?php

/**
 * Primera theme plugin requirements
 */
require_once PRIMERA_CORE_PATH . 'tgm/class-tgm-plugin-activation.php';
require_once PRIMERA_CORE_PATH . 'settings/plugins.php';

/**
 * Theme core settings
 */
require_once PRIMERA_CORE_PATH . 'settings/primera-functions.php';
require_once PRIMERA_CORE_PATH . 'settings/callbacks.php';
require_once PRIMERA_CORE_PATH . 'settings/primera-hooks.php';
require_once PRIMERA_CORE_PATH . 'settings/theme-support.php';
require_once PRIMERA_CORE_PATH . 'settings/theme-images.php';
require_once PRIMERA_CORE_PATH . 'settings/customizer.php';
require_once PRIMERA_CORE_PATH . 'settings/sidebars.php';
require_once PRIMERA_CORE_PATH . 'settings/enqueue.php';
require_once PRIMERA_CORE_PATH . 'settings/category-meta.php';

/**
 *  AJAX
 */
require_once PRIMERA_CORE_PATH . 'ajax/enqueue.php';
require_once PRIMERA_CORE_PATH . 'ajax/callbacks.php';

/**
 * Theme options settings
 */
//require_once PRIMERA_CORE_PATH . 'customizer-settings.php';
require_once PRIMERA_CORE_PATH . 'vafpress/functions.php';
require_once PRIMERA_CLASS_PATH . 'class-primera.php';
require_once PRIMERA_CLASS_PATH . 'class-primera-admin-control.php';
//require_once PRIMERA_CLASS_PATH . 'class-wp-customize-palette-control.php';
require_once PRIMERA_CLASS_PATH . 'subclasses/class-theme-option-social.php';
//require_once PRIMERA_CLASS_PATH . 'subclasses/class-theme-option-sidebar.php';
require_once PRIMERA_CLASS_PATH . 'subclasses/class-theme-option-footer.php';
require_once PRIMERA_CLASS_PATH . 'class-primera-navigation-walker.php';

//require_once PRIMERA_CLASS_PATH . 'objects/class-theme-option-typography.php';
//require_once PRIMERA_CORE_PATH . 'load-primera-settings.php';

