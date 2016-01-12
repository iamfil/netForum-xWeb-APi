<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfAvailableValue implements ArrayAccess, Iterator, Countable
{

    /**
     * @var AvailableValue[] $AvailableValue
     */
    protected $AvailableValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableValue[]
     */
    public function getAvailableValue()
    {
      return $this->AvailableValue;
    }

    /**
     * @param AvailableValue[] $AvailableValue
     * @return \netForum\xWeb\Xml\Generated\ArrayOfAvailableValue
     */
    public function setAvailableValue(array $AvailableValue = null)
    {
      $this->AvailableValue = $AvailableValue;
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
      return isset($this->AvailableValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailableValue
     */
    public function offsetGet($offset)
    {
      return $this->AvailableValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailableValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AvailableValue[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AvailableValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableValue Return the current element
     */
    public function current()
    {
      return current($this->AvailableValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailableValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailableValue);
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
      reset($this->AvailableValue);
    }

    /**
     * Countable implementation
     *
     * @return AvailableValue Return count of elements
     */
    public function count()
    {
      return count($this->AvailableValue);
    }

}
