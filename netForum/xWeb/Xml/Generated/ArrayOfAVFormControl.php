<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfAVFormControl implements ArrayAccess, Iterator, Countable
{

    /**
     * @var AVFormControl[] $AVFormControl
     */
    protected $AVFormControl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AVFormControl[]
     */
    public function getAVFormControl()
    {
      return $this->AVFormControl;
    }

    /**
     * @param AVFormControl[] $AVFormControl
     * @return \netForum\xWeb\Xml\Generated\ArrayOfAVFormControl
     */
    public function setAVFormControl(array $AVFormControl = null)
    {
      $this->AVFormControl = $AVFormControl;
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
      return isset($this->AVFormControl[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AVFormControl
     */
    public function offsetGet($offset)
    {
      return $this->AVFormControl[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AVFormControl $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AVFormControl[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AVFormControl[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AVFormControl Return the current element
     */
    public function current()
    {
      return current($this->AVFormControl);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AVFormControl);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AVFormControl);
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
      reset($this->AVFormControl);
    }

    /**
     * Countable implementation
     *
     * @return AVFormControl Return count of elements
     */
    public function count()
    {
      return count($this->AVFormControl);
    }

}
