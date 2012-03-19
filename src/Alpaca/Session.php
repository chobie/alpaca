<?php
namespace Alpaca;

class Session
{
    /** @var \Alpaca\Driver\Base */
    protected $driver;

    /**
     *
     *
     * @param string $driver_name
     */
    public function __construct($driver_name)
    {
        $this->driver = Alpaca::getDriver($driver_name);
    }

    /**
     * visit specified Url
     *
     * @param $url
     */
    public function visit($url)
    {
        $this->driver->visit($url);
    }

    /**
     * save frame image as png.
     *
     * @param $path
     * @param array $options
     */
    public function render($path, $options = array())
    {
        $this->driver->render($path,$options);
    }

    public function executeScript($script)
    {
        return $this->driver->executeScript($script);
    }

    public function evaluateScript($script)
    {
        return $this->driver->evaluateScript($script);
    }

    public function setHeader($key, $value)
    {
        $this->driver->setHeader($key, $value);
    }

    public function getCookies()
    {
        return $this->driver->getCookies();
    }

    /**
     * reset driver session
     * @return void
     */
    public function reset()
    {
        $this->driver->reset();
    }

    /**
     * get current status code
     *
     * @return int http response code
     */
    public function getStatusCode()
    {
        return $this->driver->getStatusCode();
    }

    /**
     * get response headers
     *
     * @return mixed
     */
    public function getResponseHeaders()
    {
        return $this->driver->getResponseHeaders();
    }

    /**
     * get current content
     *
     * @return string
     */
    public function getBody()
    {
        return $this->driver->getBody();
    }

    /**
     * get current source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->driver->getSource();
    }

    public function getCurrentUrl()
    {
        return $this->driver->getCurrentUrl();
    }


    public function clickLink($title)
    {
        return $this->driver->clickLink($title);
    }

    public function clickButton($title)
    {
        return $this->driver->clickButton($title);
    }

    public function find($query)
    {
        return $this->driver->find($query);
    }

    public function fillIn($name, $value)
    {
        return $this->driver->fillIn($name, $value);
    }

    public function check($name)
    {
    }

    public function uncheck($name)
    {
    }

    public function attachFile($name, $path)
    {
    }

    public function select($value, $select_box)
    {
    }

}