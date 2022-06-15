<?php

namespace Abbotton\Esign\factory\bean;

/**
 * 轩辕API一步发起签署-signfield参数-signDateBean参数
 * @author  澄泓
 * @date  2020/11/25 10:40
 */
class SignDateBean implements \JsonSerializable
{
    private $fontSize;
    private $format;
    private $posPage;
    private $posX;
    private $posY;

    public function __construct()
    {
    }
    /**
     * @return mixed
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param mixed $fontSize
     * @return SignDateBean
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     * @return SignDateBean
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosPage()
    {
        return $this->posPage;
    }

    /**
     * @param mixed $posPage
     * @return SignDateBean
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
     * @param mixed $posX
     * @return SignDateBean
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
     * @return SignDateBean
     */
    public function setPosY($posY)
    {
        $this->posY = $posY;
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
