<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-signer参数-signerAccount参数
 * @author  澄泓
 * @date  2020/11/27 14:20
 */
class SignerAccount implements \JsonSerializable
{
    private $signerAccountId;
    private $authorizedAccountId;

    /**
     * @return mixed
     */
    public function getSignerAccountId()
    {
        return $this->signerAccountId;
    }

    /**
     * @param mixed $signerAccountId
     * @return
     */
    public function setSignerAccountId($signerAccountId)
    {
        $this->signerAccountId = $signerAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorizedAccountId()
    {
        return $this->authorizedAccountId;
    }

    /**
     * @param mixed $authorizedAccountId
     * @return
     */
    public function setAuthorizedAccountId($authorizedAccountId)
    {
        $this->authorizedAccountId = $authorizedAccountId;
        return $this;
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
