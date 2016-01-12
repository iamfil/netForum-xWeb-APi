<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfDonation implements ArrayAccess, Iterator, Countable
{

    /**
     * @var Donation[] $Donation
     */
    protected $Donation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Donation[]
     */
    public function getDonation()
    {
      return $this->Donation;
    }

    /**
     * @param Donation[] $Donation
     * @return \netForum\xWeb\Xml\Generated\ArrayOfDonation
     */
    public function setDonation(array $Donation = null)
    {
      $this->Donation = $Donation;
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
      return isset($this->Donation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Donation
     */
    public function offsetGet($offset)
    {
      return $this->Donation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Donation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Donation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Donation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Donation Return the current element
     */
    public function current()
    {
      return current($this->Donation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Donation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Donation);
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
      reset($this->Donation);
    }

    /**
     * Countable implementation
     *
     * @return Donation Return count of elements
     */
    public function count()
    {
      return count($this->Donation);
    }

}
