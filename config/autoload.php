<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'ContentContact' => 'system/modules/euf_contact/elements/ContentContact.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_contact' => 'system/modules/euf_contact/templates',
));
