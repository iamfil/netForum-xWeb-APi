<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfListOption implements ArrayAccess, Iterator, Countable
{

    /**
     * @var ListOption[] $ListOption
     */
    protected $ListOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ListOption[]
     */
    public function getListOption()
    {
      return $this->ListOption;
    }

    /**
     * @param ListOption[] $ListOption
     * @return \netForum\xWeb\Xml\Generated\ArrayOfListOption
     */
    public function setListOption(array $ListOption = null)
    {
      $this->ListOption = $ListOption;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ListOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ListOption
     */
    public function offsetGet($offset)
    {
      return $this->ListOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ListOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ListOption[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ListOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ListOption Return the current element
     */
    public function current()
    {
      return current($this->ListOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ListOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ListOption);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ListOption);
    }

    /**
     * Countable implementation
     *
     * @return ListOption Return count of elements
     */
    public function count()
    {
      return count($this->ListOption);
    }

}
