<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-signer参数
 * @author  澄泓
 * @date  2020/11/24 14:11
 */
class Signer implements \JsonSerializable
{
    private $platformSign;
    private $signOrder;
    private $signerAccount;
    private $signfields;
    private $thirdOrderNo;

    public function __construct()
    {
    }
    /**
     * @return mixed
     */
    public function getPlatformSign()
    {
        return $this->platformSign;
    }

    /**
     * @param mixed $platformSign
     * @return Signer
     */
    public function setPlatformSign($platformSign)
    {
        $this->platformSign = $platformSign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignOrder()
    {
        return $this->signOrder;
    }

    /**
     * @param mixed $signOrder
     * @return Signer
     */
    public function setSignOrder($signOrder)
    {
        $this->signOrder = $signOrder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignerAccount()
    {
        return $this->signerAccount;
    }

    /**
     * @param mixed $signerAccount
     * @return Signer
     */
    public function setSignerAccount($signerAccount)
    {
        $this->signerAccount = $signerAccount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignfields()
    {
        return $this->signfields;
    }

    /**
     * @param mixed $signfields
     * @return Signer
     */
    public function setSignfields($signfields)
    {
        $this->signfields = $signfields;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThirdOrderNo()
    {
        return $this->thirdOrderNo;
    }

    /**
     * @param mixed $thirdOrderNo
     * @return Signer
     */
    public function setThirdOrderNo($thirdOrderNo)
    {
        $this->thirdOrderNo = $thirdOrderNo;
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
