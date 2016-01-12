<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfMergeCustomerResult implements ArrayAccess, Iterator, Countable
{

    /**
     * @var MergeCustomerResult[] $MergeCustomerResult
     */
    protected $MergeCustomerResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MergeCustomerResult[]
     */
    public function getMergeCustomerResult()
    {
      return $this->MergeCustomerResult;
    }

    /**
     * @param MergeCustomerResult[] $MergeCustomerResult
     * @return \netForum\xWeb\Xml\Generated\ArrayOfMergeCustomerResult
     */
    public function setMergeCustomerResult(array $MergeCustomerResult = null)
    {
      $this->MergeCustomerResult = $MergeCustomerResult;
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
      return isset($this->MergeCustomerResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MergeCustomerResult
     */
    public function offsetGet($offset)
    {
      return $this->MergeCustomerResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MergeCustomerResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->MergeCustomerResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->MergeCustomerResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MergeCustomerResult Return the current element
     */
    public function current()
    {
      return current($this->MergeCustomerResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MergeCustomerResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MergeCustomerResult);
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
      reset($this->MergeCustomerResult);
    }

    /**
     * Countable implementation
     *
     * @return MergeCustomerResult Return count of elements
     */
    public function count()
    {
      return count($this->MergeCustomerResult);
    }

}
