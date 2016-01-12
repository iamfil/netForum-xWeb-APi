<?php

namespace netForum\xWeb\Xml\Generated;

class ExecuteMethod
{

    /**
     * @var string $serviceName
     */
    protected $serviceName = null;

    /**
     * @var string $methodName
     */
    protected $methodName = null;

    /**
     * @var ArrayOfParameter $parameters
     */
    protected $parameters = null;

    /**
     * @param string $serviceName
     * @param string $methodName
     * @param ArrayOfParameter $parameters
     */
    public function __construct($serviceName, $methodName, $parameters)
    {
      $this->serviceName = $serviceName;
      $this->methodName = $methodName;
      $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return \netForum\xWeb\Xml\Generated\ExecuteMethod
     */
    public function setServiceName($serviceName)
    {
      $this->serviceName = $serviceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
      return $this->methodName;
    }

    /**
     * @param string $methodName
     * @return \netForum\xWeb\Xml\Generated\ExecuteMethod
     */
    public function setMethodName($methodName)
    {
      $this->methodName = $methodName;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param ArrayOfParameter $parameters
     * @return \netForum\xWeb\Xml\Generated\ExecuteMethod
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}
