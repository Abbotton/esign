<?php

namespace Abbotton\Esign\factory\signfile\signflows;

use Abbotton\Esign\factory\request\EsignRequest;
use Abbotton\Esign\enum\HttpEnum;

/**
 * 轩辕API签署流程查询
 * @author  澄泓
 * @date  2020/11/25 10:59
 */
class QrySignFlow extends EsignRequest
{
    private $flowId;

    /**
     * QrySignFlow constructor.
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
     * @return QrySignFlow
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
        return $this;
    }

    public function build()
    {
        $this->setUrl("/v1/signflows/".$this->flowId);
        $this->setReqType(HttpEnum::GET);
    }
}
