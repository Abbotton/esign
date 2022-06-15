<?php

namespace Abbotton\Esign\factory\signfile\datasign;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API文本签验签
 * @author  澄泓
 * @date  2020/11/24 14:31
 */
class DataVerify extends EsignRequest implements \JsonSerializable
{
    private $data;
    private $signResult;

    /**
     * DataVerify constructor.
     * @param $data
     * @param $signResult
     */
    public function __construct($data, $signResult)
    {
        $this->data = $data;
        $this->signResult = $signResult;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return DataVerify
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignResult()
    {
        return $this->signResult;
    }

    /**
     * @param mixed $signResult
     * @return DataVerify
     */
    public function setSignResult($signResult)
    {
        $this->signResult = $signResult;
        return $this;
    }

    public function build()
    {
        $this->setUrl("/v1/dataSign/verify");
        $this->setReqType(HttpEnum::POST);
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $json = array();
        foreach ($this as $key => $value) {
            if ($value===null) {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
