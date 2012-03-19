<?php
namespace Alpaca\Driver;

interface Base
{
    /**
     * return current url
     *
     * @return string
     */
    public function getCurrentUrl();

    /**
     * visit specified url.
     *
     * @param $path
     * @return void
     */
    public function visit($path);

    /**
     * find node with xpath
     *
     * @param $query
     * @return array
     */
    public function find($query);

    /**
     * find the element and set value
     *
     * @param $name input tag name or id
     * @param $value
     * @return bool
     */
    public function fillIn($name, $value);

    /**
     * click link with specified text node
     *
     * @param $title
     * @return bool
     */
    public function clickLink($title);

    /**
     * click button with specified value
     *
     * @param $value
     * @return bool
     */
    public function clickButton($value);

    /**
     * return current source code
     *
     * @return string
     */
    public function getSource();

    /**
     * return current body
     *
     * @return string
     */
    public function getBody();

    /**
     * set header
     *
     * @param $key
     * @param $value
     */
    public function setHeader($key, $value);

    /**
     * evaluate specified javascript on current frame.
     *
     * this method will return json array
     *
     * @param $script
     * @return mixed
     */
    public function evaluateScript($script);

    /**
     * execute specified javascript on current frame
     *
     * @param $script
     * @return mixed
     */
    public function executeScript($script);

    /**
     * probably this method will obtain console.log() message.
     *
     * @return array
     */
    public function getConsoleMessage();

    public function getErrorMessage();

    /**
     * obtain current response headers.
     *
     * @return mixed
     */
    public function getResponseHeaders();

    /**
     * obtain current http status
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * find and execute php function with found scope
     *
     * @param $frame_id_or_index
     * @param $func
     */
    public function withinFrame($frame_id_or_index, $func);

    /**
     * reset webkit browser
     *
     * @return void
     */
    public function reset();

    /**
     * render current frame image
     *
     * @param $path
     * @param array $options width and height parameters are required.
     */
    public function render($path, $options = array());

    /**
     * @return array cookies
     */
    public function getCookies();

    public function check($name);

    public function uncheck($name);

    public function attachFile($name, $path);

    public function select($value, $select_box);
}