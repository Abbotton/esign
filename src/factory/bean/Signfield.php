<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-signfield参数
 * @author  澄泓
 * @date  2020/11/25 10:23
 */
class Signfield implements \JsonSerializable
{
    private $autoExecute;
    private $actorIndentityType;
    private $fileId;
    private $sealId;
    private $sealType;
    private $signType;
    private $posBean;
    private $width;
    private $signDateBeanType;
    private $signDateBean;
    private $authorizedAccountId;
    private $signerAccountId;

    public function __construct()
    {
    }
    /**
     * @return mixed
     */
    public function getAutoExecute()
    {
        return $this->autoExecute;
    }

    /**
     * @param mixed $autoExecute
     * @return Signfield
     */
    public function setAutoExecute($autoExecute)
    {
        $this->autoExecute = $autoExecute;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActorIndentityType()
    {
        return $this->actorIndentityType;
    }

    /**
     * @param mixed $actorIndentityType
     * @return Signfield
     */
    public function setActorIndentityType($actorIndentityType)
    {
        $this->actorIndentityType = $actorIndentityType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     * @return Signfield
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     * @return Signfield
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSealType()
    {
        return $this->sealType;
    }

    /**
     * @param mixed $sealType
     * @return Signfield
     */
    public function setSealType($sealType)
    {
        $this->sealType = $sealType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * @param mixed $signType
     * @return Signfield
     */
    public function setSignType($signType)
    {
        $this->signType = $signType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosBean()
    {
        return $this->posBean;
    }

    /**
     * @param mixed $posBean
     * @return Signfield
     */
    public function setPosBean($posBean)
    {
        $this->posBean = $posBean;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return Signfield
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignDateBeanType()
    {
        return $this->signDateBeanType;
    }

    /**
     * @param mixed $signDateBeanType
     * @return Signfield
     */
    public function setSignDateBeanType($signDateBeanType)
    {
        $this->signDateBeanType = $signDateBeanType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignDateBean()
    {
        return $this->signDateBean;
    }

    /**
     * @param mixed $signDateBean
     * @return Signfield
     */
    public function setSignDateBean($signDateBean)
    {
        $this->signDateBean = $signDateBean;
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
     * @return Signfield
     */
    public function setAuthorizedAccountId($authorizedAccountId)
    {
        $this->authorizedAccountId = $authorizedAccountId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignerAccountId()
    {
        return $this->signerAccountId;
    }

    /**
     * @param mixed $signerAccountId
     * @return Signfield
     */
    public function setSignerAccountId($signerAccountId)
    {
        $this->signerAccountId = $signerAccountId;
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
