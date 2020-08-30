<?php

/**
 * * This file is part of ErdmannFreunde/euf_contact.
 *
 * (c) 2018 Erdmann & Freunde.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    euf_contact
 * @author     Dennis Erdmann
 * @copyright  2018 Erdmann & Freunde
 * @license    LICENSE LGPL-3.0
 * @filesource
 */


/*
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addContactImage';

$GLOBALS['TL_DCA']['tl_content']['palettes']['contact'] =
    '{type_legend},type,headline;'
    . '{text_legend},contact_name,contact_position,contact_phone,contact_fax,contact_email,contact_description;'
    . '{image_legend},addContactImage;'
    . '{template_legend:hide},customTpl;'
    . '{protected_legend:hide},protected;'
    . '{expert_legend:hide},guests,cssID,space;'
    . '{invisible_legend:hide},invisible,start,stop';


/*
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addContactImage'] = 'singleSRC,size,alt,imageTitle,caption';


/*
 * Fields
 */

// name
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_name'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_name'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'mandatory' => true,
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_position'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_position'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];


// Phone
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_phone'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_phone'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength'      => 255,
        'rgxp'           => 'phone',
        'decodeEntities' => true,
        'tl_class'       => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// Fax
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_phone'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_phone'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength'      => 255,
        'rgxp'           => 'phone',
        'decodeEntities' => true,
        'tl_class'       => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];


// E-Mail
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_email'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_email'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength'      => 255,
        'rgxp'           => 'email',
        'decodeEntities' => true,
        'tl_class'       => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// description
$GLOBALS['TL_DCA']['tl_content']['fields']['contact_description'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['contact_description'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => [
        'rte'      => 'tinyMCE',
        'tl_class' => 'clr'
    ],
    'sql'       => 'mediumtext NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['addContactImage'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addContactImage'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => [
        'submitOnChange' => true
    ],
    'sql'       => "char(1) NOT NULL default ''"
];
