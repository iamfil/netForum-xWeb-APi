<?php

namespace netForum\xWeb\Xml\Generated;

class Column
{

    /**
     * @var string $mdc_name
     */
    protected $mdc_name = null;

    /**
     * @var string $mdc_description
     */
    protected $mdc_description = null;

    /**
     * @var string $mdc_data_type
     */
    protected $mdc_data_type = null;

    /**
     * @var string $mdc_ext
     */
    protected $mdc_ext = null;

    /**
     * @var string $mdc_nullable
     */
    protected $mdc_nullable = null;

    /**
     * @var string $mdc_table_name
     */
    protected $mdc_table_name = null;

    /**
     * @var string $mdc_width_max
     */
    protected $mdc_width_max = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMdc_name()
    {
      return $this->mdc_name;
    }

    /**
     * @param string $mdc_name
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_name($mdc_name)
    {
      $this->mdc_name = $mdc_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_description()
    {
      return $this->mdc_description;
    }

    /**
     * @param string $mdc_description
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_description($mdc_description)
    {
      $this->mdc_description = $mdc_description;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_data_type()
    {
      return $this->mdc_data_type;
    }

    /**
     * @param string $mdc_data_type
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_data_type($mdc_data_type)
    {
      $this->mdc_data_type = $mdc_data_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_ext()
    {
      return $this->mdc_ext;
    }

    /**
     * @param string $mdc_ext
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_ext($mdc_ext)
    {
      $this->mdc_ext = $mdc_ext;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_nullable()
    {
      return $this->mdc_nullable;
    }

    /**
     * @param string $mdc_nullable
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_nullable($mdc_nullable)
    {
      $this->mdc_nullable = $mdc_nullable;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_table_name()
    {
      return $this->mdc_table_name;
    }

    /**
     * @param string $mdc_table_name
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_table_name($mdc_table_name)
    {
      $this->mdc_table_name = $mdc_table_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMdc_width_max()
    {
      return $this->mdc_width_max;
    }

    /**
     * @param string $mdc_width_max
     * @return \netForum\xWeb\Xml\Generated\Column
     */
    public function setMdc_width_max($mdc_width_max)
    {
      $this->mdc_width_max = $mdc_width_max;
      return $this;
    }

}
