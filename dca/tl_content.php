<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   euf_contact
 * @author    Dennis Erdmann
 * @license   LGPL
 * @copyright Erdmann & Freunde
 */




/*
 * Palettes
 */
 
 $GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'] = array ('type', 'addImage', 'addContactImage', 'sortable', 'useImage', 'overwriteMeta', 'protected');


$GLOBALS['TL_DCA']['tl_content']['palettes']['contact'] = '{type_legend},type,headline;{text_legend},contact_name,contact_position,contact_email,contact_description;{image_legend},addContactImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';



/*
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes'] = array
(
	'addContactImage' => 'singleSRC,size,overwriteMeta'
);



/*
 * Fields
 */

// name
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_name'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_content']['contact_name'],
	'exclude'          => true,
	'search'           => true,
	'flag'             => 1,
	'inputType'        => 'text',
	'eval'             => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'              => "varchar(255) NOT NULL default ''"
);
		
// position
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_position'] = array
(
  'label'            => &$GLOBALS['TL_LANG']['tl_content']['contact_position'],
	'exclude'          => true,
	'search'           => true,
	'flag'             => 1,
	'inputType'        => 'text',
	'eval'             => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'              => "varchar(255) NOT NULL default ''"
);

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_email'] = array
(
  'label'            => &$GLOBALS['TL_LANG']['tl_content']['contact_email'],
	'exclude'          => true,
			'search'       => true,
			'inputType'    => 'text',
			'eval'         => array('maxlength'=>255, 'rgxp'=>'email', 'tl_class'=>'w50'),
			'sql'          => "varchar(255) NOT NULL default ''"
);

// description
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_description'] = array
(
  'label'            => &$GLOBALS['TL_LANG']['tl_content']['contact_description'],
	'exclude'          => true,
			'search'       => true,
			'inputType'    => 'textarea',
			'eval'         => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
			'sql'          => "mediumtext NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['addContactImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addContactImage'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);