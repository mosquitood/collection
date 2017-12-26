<?php 
/*
 * This file is part of the Mosquitood package.
 *
 * (c) Mosquitood <mosquitood@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mosquitood\Collection; 

/**
 * Collection Interface
 *
 * @author Mosquitood <mosquitood@gmail.com>
 */

interface CollectionInterface extends \ArrayAccess, \Countable, \IteratorAggregate 
{
    public function set($key, $value);

    public function get($key, $default = null);

    public function replace(array $parameters = array());

    public function add(array $parameters = array());

    public function all();

    public function has($key);

    public function remove($key);

    public function clear();

    public function keys();

}
