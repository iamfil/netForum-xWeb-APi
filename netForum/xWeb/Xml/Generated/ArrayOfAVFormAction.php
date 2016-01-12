<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfAVFormAction implements ArrayAccess, Iterator, Countable
{

    /**
     * @var AVFormAction[] $AVFormAction
     */
    protected $AVFormAction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AVFormAction[]
     */
    public function getAVFormAction()
    {
      return $this->AVFormAction;
    }

    /**
     * @param AVFormAction[] $AVFormAction
     * @return \netForum\xWeb\Xml\Generated\ArrayOfAVFormAction
     */
    public function setAVFormAction(array $AVFormAction = null)
    {
      $this->AVFormAction = $AVFormAction;
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
      return isset($this->AVFormAction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AVFormAction
     */
    public function offsetGet($offset)
    {
      return $this->AVFormAction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AVFormAction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AVFormAction[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AVFormAction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AVFormAction Return the current element
     */
    public function current()
    {
      return current($this->AVFormAction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AVFormAction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AVFormAction);
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
      reset($this->AVFormAction);
    }

    /**
     * Countable implementation
     *
     * @return AVFormAction Return count of elements
     */
    public function count()
    {
      return count($this->AVFormAction);
    }

}
