<?php

namespace netForum\xWeb\Xml\Generated;

class ArrayOfMailingListSetting implements ArrayAccess, Iterator, Countable
{

    /**
     * @var MailingListSetting[] $MailingListSetting
     */
    protected $MailingListSetting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MailingListSetting[]
     */
    public function getMailingListSetting()
    {
      return $this->MailingListSetting;
    }

    /**
     * @param MailingListSetting[] $MailingListSetting
     * @return \netForum\xWeb\Xml\Generated\ArrayOfMailingListSetting
     */
    public function setMailingListSetting(array $MailingListSetting = null)
    {
      $this->MailingListSetting = $MailingListSetting;
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
      return isset($this->MailingListSetting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MailingListSetting
     */
    public function offsetGet($offset)
    {
      return $this->MailingListSetting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MailingListSetting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->MailingListSetting[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->MailingListSetting[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MailingListSetting Return the current element
     */
    public function current()
    {
      return current($this->MailingListSetting);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MailingListSetting);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MailingListSetting);
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
      reset($this->MailingListSetting);
    }

    /**
     * Countable implementation
     *
     * @return MailingListSetting Return count of elements
     */
    public function count()
    {
      return count($this->MailingListSetting);
    }

}
