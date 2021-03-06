<?php
namespace php\net;

/**
 * Class HttpMessage
 * @package php\net
 */
class HttpMessage
{
    public function __construct(array $headers, $body)
    {
    }

    /**
     * @param string $value
     */
    public function setBody($value)
    {
    }

    /**
     * @return string
     */
    public function getBody()
    {
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasHeader($name)
    {
    }

    /**
     * @param string $name
     * @param mixed|array $value
     */
    public function setHeader($name, $value)
    {
    }

    /**
     * @param $name
     * @return bool
     */
    public function removeHeader($name)
    {
    }

    /**
     * @return array
     */
    public function getCookies()
    {
    }

    /**
     * @param array $cookies
     */
    public function setCookies(array $cookies)
    {
    }

    /**
     * @param $name
     * @return string|null
     */
    public function getCookie($name)
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasCookie($name)
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function removeCookie($name)
    {
    }
}