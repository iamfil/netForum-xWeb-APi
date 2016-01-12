<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfMailingList implements ArrayAccess, Iterator, Countable
{

    /**
     * @var MailingList[] $MailingList
     */
    protected $MailingList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MailingList[]
     */
    public function getMailingList()
    {
      return $this->MailingList;
    }

    /**
     * @param MailingList[] $MailingList
     * @return \netForum\xWeb\Xml\Generated\ArrayOfMailingList
     */
    public function setMailingList(array $MailingList = null)
    {
      $this->MailingList = $MailingList;
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
      return isset($this->MailingList[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MailingList
     */
    public function offsetGet($offset)
    {
      return $this->MailingList[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MailingList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->MailingList[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->MailingList[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MailingList Return the current element
     */
    public function current()
    {
      return current($this->MailingList);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MailingList);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MailingList);
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
      reset($this->MailingList);
    }

    /**
     * Countable implementation
     *
     * @return MailingList Return count of elements
     */
    public function count()
    {
      return count($this->MailingList);
    }

}
