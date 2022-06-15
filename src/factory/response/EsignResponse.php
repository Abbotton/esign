<?php

namespace Abbotton\Esign\factory\response;

/**
 * 轩辕API响应
 * @author  澄泓
 * @date  2020/11/19 9:51
 */
class EsignResponse
{
    private $status;
    private $body;

    /**
     * EsignResponse constructor.
     * @param $status
     * @param $body
     */
    public function __construct($status, $body)
    {
        $this->status = $status;
        $this->body = $body;
    }


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}
