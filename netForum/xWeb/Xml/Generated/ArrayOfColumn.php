<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfColumn implements ArrayAccess, Iterator, Countable
{

    /**
     * @var Column[] $Column
     */
    protected $Column = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Column[]
     */
    public function getColumn()
    {
      return $this->Column;
    }

    /**
     * @param Column[] $Column
     * @return \netForum\xWeb\Xml\Generated\ArrayOfColumn
     */
    public function setColumn(array $Column = null)
    {
      $this->Column = $Column;
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
      return isset($this->Column[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Column
     */
    public function offsetGet($offset)
    {
      return $this->Column[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Column $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Column[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Column[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Column Return the current element
     */
    public function current()
    {
      return current($this->Column);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Column);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Column);
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
      reset($this->Column);
    }

    /**
     * Countable implementation
     *
     * @return Column Return count of elements
     */
    public function count()
    {
      return count($this->Column);
    }

}
