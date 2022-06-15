<?php

namespace Abbotton\Esign\factory\antfinsign;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API查询签署文件上链信息
 * @author  澄泓
 * @date  2020/11/20 15:49
 */
class QrySignAntPushInfo extends EsignRequest implements \JsonSerializable
{
    private $flowId;

    /**
     * QrySignAntPushInfo constructor.
     * @param $flowId
     */
    public function __construct($flowId)
    {
        $this->flowId = $flowId;
    }

    /**
     * @return mixed
     */
    public function getFlowId()
    {
        return $this->flowId;
    }

    /**
     * @param mixed $flowId
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
    }

    public function build()
    {
        $this->setUrl("/v1/querySignAntPushInfo");
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
            if ($value == null) {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
