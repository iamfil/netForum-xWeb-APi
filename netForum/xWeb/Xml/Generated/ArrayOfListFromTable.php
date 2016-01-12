<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfListFromTable implements ArrayAccess, Iterator, Countable
{

    /**
     * @var ListFromTable[] $ListFromTable
     */
    protected $ListFromTable = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ListFromTable[]
     */
    public function getListFromTable()
    {
      return $this->ListFromTable;
    }

    /**
     * @param ListFromTable[] $ListFromTable
     * @return \netForum\xWeb\Xml\Generated\ArrayOfListFromTable
     */
    public function setListFromTable(array $ListFromTable = null)
    {
      $this->ListFromTable = $ListFromTable;
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
      return isset($this->ListFromTable[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ListFromTable
     */
    public function offsetGet($offset)
    {
      return $this->ListFromTable[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ListFromTable $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ListFromTable[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ListFromTable[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ListFromTable Return the current element
     */
    public function current()
    {
      return current($this->ListFromTable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ListFromTable);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ListFromTable);
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
      reset($this->ListFromTable);
    }

    /**
     * Countable implementation
     *
     * @return ListFromTable Return count of elements
     */
    public function count()
    {
      return count($this->ListFromTable);
    }

}
