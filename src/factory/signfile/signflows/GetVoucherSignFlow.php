<?php

namespace Abbotton\Esign\factory\signfile\signflows;

use Abbotton\Esign\factory\request\EsignRequest;
use Abbotton\Esign\enum\HttpEnum;

/**
 * 轩辕API流程签署数据存储凭据
 * @author  澄泓
 * @date  2020/11/25 10:58
 */
class GetVoucherSignFlow extends EsignRequest
{
    private $flowId;

    /**
     * GetVoucherSignFlow constructor.
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
     * @return GetVoucherSignFlow
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;
        return $this;
    }

    public function build()
    {
        $this->setUrl("/api/v2/signflows/".$this->flowId."/getVoucher");
        $this->setReqType(HttpEnum::GET);
    }
}
