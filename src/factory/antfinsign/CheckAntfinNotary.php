<?php

namespace Abbotton\Esign\factory\antfinsign;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API核验签署文件上链信息
 * @author  澄泓
 * @date  2020/11/20 15:10
 */
class CheckAntfinNotary extends EsignRequest implements \JsonSerializable
{
    private $docHash;
    private $antTxHash;

    /**
     * CheckAntfinNotary constructor.
     * @param $docHash
     * @param $antTxHash
     */
    public function __construct($docHash, $antTxHash)
    {
        $this->docHash = $docHash;
        $this->antTxHash = $antTxHash;
    }

    /**
     * @return mixed
     */
    public function getDocHash()
    {
        return $this->docHash;
    }

    /**
     * @param mixed $docHash
     */
    public function setDocHash($docHash)
    {
        $this->docHash = $docHash;
    }

    /**
     * @return mixed
     */
    public function getAntTxHash()
    {
        return $this->antTxHash;
    }

    /**
     * @param mixed $antTxHash
     */
    public function setAntTxHash($antTxHash)
    {
        $this->antTxHash = $antTxHash;
    }

    public function build()
    {
        $this->setUrl("/v1/checkAntfinNotary");
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
