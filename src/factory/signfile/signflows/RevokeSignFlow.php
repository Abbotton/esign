<?php

namespace Abbotton\Esign\factory\signfile\signflows;

use Abbotton\Esign\factory\request\EsignRequest;
use Abbotton\Esign\enum\HttpEnum;

/**
 * 轩辕API签署流程撤销
 * @author  澄泓
 * @date  2020/11/25 11:01
 */
class RevokeSignFlow extends EsignRequest implements \JsonSerializable
{
    private $flowId;
    private $operatorId;
    private $revokeReason;

    /**
     * RevokeSignFlow constructor.
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
     * @return RevokeSignFlow
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param mixed $operatorId
     * @return RevokeSignFlow
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevokeReason()
    {
        return $this->revokeReason;
    }

    /**
     * @param mixed $revokeReason
     * @return RevokeSignFlow
     */
    public function setRevokeReason($revokeReason)
    {
        $this->revokeReason = $revokeReason;
        return $this;
    }

    public function build()
    {
        $this->setUrl("/v1/signflows/".$this->flowId."/revoke");
        $this->setReqType(HttpEnum::PUT);
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
            if ($value===null||$key=='flowId') {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
