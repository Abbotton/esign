<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-signfield参数-posBean参数
 * @author  澄泓
 * @date  2020/11/25 10:38
 */
class PosBean implements \JsonSerializable
{
    private $posPage;
    private $posX;
    private $posY;
    private $addSignTime;
    private $signTimeFormat;


    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getPosPage()
    {
        return $this->posPage;
    }

    /**
     * @param $posPage
     * @return $this
     */
    public function setPosPage($posPage)
    {
        $this->posPage = $posPage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosX()
    {
        return $this->posX;
    }

    /**
     * @param $posX
     * @return $this
     */
    public function setPosX($posX)
    {
        $this->posX = $posX;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosY()
    {
        return $this->posY;
    }

    /**
     * @param mixed $posY
     * @return $this
     */
    public function setPosY($posY)
    {
        $this->posY = $posY;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddSignTime()
    {
        return $this->addSignTime;
    }

    /**
     * @param mixed $addSignTime
     * @return PosBean
     */
    public function setAddSignTime($addSignTime)
    {
        $this->addSignTime = $addSignTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSignTimeFormat()
    {
        return $this->signTimeFormat;
    }

    /**
     * @param mixed $signTimeFormat
     * @return PosBean
     */
    public function setSignTimeFormat($signTimeFormat)
    {
        $this->signTimeFormat = $signTimeFormat;
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
