<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-flowInfo参数
 * @author  澄泓
 * @date  2020/11/24 14:08
 */
class FlowInfo implements \JsonSerializable
{
    private $autoArchive;
    private $autoInitiate;
    private $businessScene;
    private $contractRemind;
    private $contractValidity;
    private $flowConfigInfo;
    private $initiatorAccountId;
    private $initiatorAuthorizedAccountId;
    private $remark;
    private $signValidity;

    public function __construct()
    {
    }
    /**
     * @return mixed
     */
    public function getAutoArchive()
    {
        return $this->autoArchive;
    }

    /**
     * @param mixed $autoArchive
     * @return FlowInfo
     */
    public function setAutoArchive($autoArchive)
    {
        $this->autoArchive = $autoArchive;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoInitiate()
    {
        return $this->autoInitiate;
    }

    /**
     * @param mixed $autoInitiate
     * @return FlowInfo
     */
    public function setAutoInitiate($autoInitiate)
    {
        $this->autoInitiate = $autoInitiate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBusinessScene()
    {
        return $this->businessScene;
    }

    /**
     * @param mixed $businessScene
     * @return FlowInfo
     */
    public function setBusinessScene($businessScene)
    {
        $this->businessScene = $businessScene;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContractRemind()
    {
        return $this->contractRemind;
    }

    /**
     * @param mixed $contractRemind
     * @return FlowInfo
     */
    public function setContractRemind($contractRemind)
    {
        $this->contractRemind = $contractRemind;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContractValidity()
    {
        return $this->contractValidity;
    }

    /**
     * @param mixed $contractValidity
     * @return FlowInfo
     */
    public function setContractValidity($contractValidity)
    {
        $this->contractValidity = $contractValidity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlowConfigInfo()
    {
        return $this->flowConfigInfo;
    }

    /**
     * @param mixed $flowConfigInfo
     * @return FlowInfo
     */
    public function setFlowConfigInfo($flowConfigInfo)
    {
        $this->flowConfigInfo = $flowConfigInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInitiatorAccountId()
    {
        return $this->initiatorAccountId;
    }

    /**
     * @param mixed $initiatorAccountId
     * @return FlowInfo
     */
    public function setInitiatorAccountId($initiatorAccountId)
    {
        $this->initiatorAccountId = $initiatorAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInitiatorAuthorizedAccountId()
    {
        return $this->initiatorAuthorizedAccountId;
    }

    /**
     * @param mixed $initiatorAuthorizedAccountId
     * @return FlowInfo
     */
    public function setInitiatorAuthorizedAccountId($initiatorAuthorizedAccountId)
    {
        $this->initiatorAuthorizedAccountId = $initiatorAuthorizedAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     * @return FlowInfo
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignValidity()
    {
        return $this->signValidity;
    }

    /**
     * @param mixed $signValidity
     * @return FlowInfo
     */
    public function setSignValidity($signValidity)
    {
        $this->signValidity = $signValidity;
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
