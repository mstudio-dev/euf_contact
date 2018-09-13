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


namespace ErdmannFreunde\ContaoContactBundle\Content;

use Contao\Config;
use Contao\ContentElement;
use Contao\FilesModel;
use Contao\StringUtil;

class Contact extends ContentElement
{

    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'ce_contact';


    /**
     * Generate the content element
     */
    protected function compile(): void
    {
        // Clean the RTE output
        $this->text = StringUtil::toHtml5($this->text);

        // Add the static files URL to images
        if (TL_FILES_URL) {
            $path = Config::get('uploadPath') . '/';

            $this->text = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $this->text);
        }

        $this->Template->text     = StringUtil::encodeEmail($this->text);
        $this->Template->addContactImage = false;

        // Add an image
        if ($this->addContactImage && $this->singleSRC) {
            $objModel = FilesModel::findByUuid($this->singleSRC);

            if ($objModel !== null && is_file(TL_ROOT . '/' . $objModel->path)) {
                $this->singleSRC = $objModel->path;
                static::addImageToTemplate($this->Template, $this->arrData);
            }
        }
    }
}
