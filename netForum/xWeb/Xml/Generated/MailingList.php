<?php

namespace netForum\xWeb\Xml\Generated;

class MailingList
{

    /**
     * @var string $primary_key
     */
    protected $primary_key = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $category
     */
    protected $category = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPrimary_key()
    {
      return $this->primary_key;
    }

    /**
     * @param string $primary_key
     * @return \netForum\xWeb\Xml\Generated\MailingList
     */
    public function setPrimary_key($primary_key)
    {
      $this->primary_key = $primary_key;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \netForum\xWeb\Xml\Generated\MailingList
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \netForum\xWeb\Xml\Generated\MailingList
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

}
