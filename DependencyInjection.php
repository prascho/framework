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

namespace Engine;

use Phalcon\DI;
use Phalcon\DiInterface;

/**
 * Dependency container trait.
 *
 * @category  PhalconEye
 * @package   Engine
 * @author    Ivan Vorontsov <vorontsov@phalconeye.com>
 * @copyright 2013 PhalconEye Team
 * @license   New BSD License
 * @link      http://phalconeye.com/
 *
 * @method \Phalcon\Mvc\Model\Transaction\Manager getTransactions()
 * @method \Engine\Asset\Manager getAssets()
 * @method \Phalcon\Mvc\Url getUrl()
 * @method \Phalcon\Logger\Adapter getLogger($file = 'main', $format = null)
 * @method \Phalcon\Http\Request getRequest()
 * @method \Phalcon\Annotations\Adapter getAnnotations()
 */
trait DependencyInjection
{
    /**
     * Dependency injection container.
     *
     * @var DependencyInjection|DI
     */
    private $_di;

    /**
     * Create object.
     *
     * @param DiInterface $di Dependency injection container.
     */
    public function __construct($di = null)
    {
        if ($di == null) {
            $di = DI::getDefault();
        }
        $this->setDI($di);
    }

    /**
     * Set DI.
     *
     * @param DiInterface $di Dependency injection container.
     *
     * @return void
     */
    public function setDI($di)
    {
        $this->_di = $di;
    }

    /**
     * Get DI.
     *
     * @return DependencyInjection|DI
     */
    public function getDI()
    {
        return $this->_di;
    }
}