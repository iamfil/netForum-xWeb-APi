<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfModuleResult implements ArrayAccess, Iterator, Countable
{

    /**
     * @var ModuleResult[] $ModuleResult
     */
    protected $ModuleResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModuleResult[]
     */
    public function getModuleResult()
    {
      return $this->ModuleResult;
    }

    /**
     * @param ModuleResult[] $ModuleResult
     * @return \netForum\xWeb\Xml\Generated\ArrayOfModuleResult
     */
    public function setModuleResult(array $ModuleResult = null)
    {
      $this->ModuleResult = $ModuleResult;
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
      return isset($this->ModuleResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModuleResult
     */
    public function offsetGet($offset)
    {
      return $this->ModuleResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModuleResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ModuleResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ModuleResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModuleResult Return the current element
     */
    public function current()
    {
      return current($this->ModuleResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModuleResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModuleResult);
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
      reset($this->ModuleResult);
    }

    /**
     * Countable implementation
     *
     * @return ModuleResult Return count of elements
     */
    public function count()
    {
      return count($this->ModuleResult);
    }

}
