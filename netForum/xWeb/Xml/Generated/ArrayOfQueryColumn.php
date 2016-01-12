<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfQueryColumn implements ArrayAccess, Iterator, Countable
{

    /**
     * @var QueryColumn[] $QueryColumn
     */
    protected $QueryColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryColumn[]
     */
    public function getQueryColumn()
    {
      return $this->QueryColumn;
    }

    /**
     * @param QueryColumn[] $QueryColumn
     * @return \netForum\xWeb\Xml\Generated\ArrayOfQueryColumn
     */
    public function setQueryColumn(array $QueryColumn = null)
    {
      $this->QueryColumn = $QueryColumn;
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
      return isset($this->QueryColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueryColumn
     */
    public function offsetGet($offset)
    {
      return $this->QueryColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueryColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->QueryColumn[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->QueryColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueryColumn Return the current element
     */
    public function current()
    {
      return current($this->QueryColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueryColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueryColumn);
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
      reset($this->QueryColumn);
    }

    /**
     * Countable implementation
     *
     * @return QueryColumn Return count of elements
     */
    public function count()
    {
      return count($this->QueryColumn);
    }

}
