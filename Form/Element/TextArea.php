<?php
/*
  +------------------------------------------------------------------------+
  | PhalconEye CMS                                                         |
  +------------------------------------------------------------------------+
  | Copyright (c) 2013-2014 PhalconEye Team (http://phalconeye.com/)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconeye.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Author: Ivan Vorontsov <ivan.vorontsov@phalconeye.com>                 |
  +------------------------------------------------------------------------+
*/

namespace Engine\Form\Element;

use Engine\Form\AbstractElement;
use Engine\Form\ElementInterface;

/**
 * Form element - Text area.
 *
 * @category  PhalconEye
 * @package   Engine\Form\Element
 * @author    Ivan Vorontsov <ivan.vorontsov@phalconeye.com>
 * @copyright 2013 PhalconEye Team
 * @license   New BSD License
 * @link      http://phalconeye.com/
 */
class TextArea extends AbstractElement implements ElementInterface
{
    /**
     * Get element html template.
     *
     * @return string
     */
    public function getHtmlTemplate()
    {
        return $this->getOption('htmlTemplate', '<textarea' . $this->_renderAttributes() . '>%s</textarea>');
    }

    /**
     * Sets the element option.
     *
     * @param string $value Element value.
     *
     * @return $this
     */
    public function setValue($value)
    {
        return parent::setValue(htmlentities($value));
    }

    /**
     * Render element.
     *
     * @return string
     */
    public function render()
    {
        return sprintf(
            $this->getHtmlTemplate(),
            $this->getValue()
        );
    }
}