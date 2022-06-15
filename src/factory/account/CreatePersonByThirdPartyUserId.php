<?php

namespace Abbotton\Esign\factory\account;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API个人账号创建
 * @author  澄泓
 * @date  2020/11/18 16:45
 */
class CreatePersonByThirdPartyUserId extends EsignRequest implements \JsonSerializable
{
    private $thirdPartyUserId;
    private $name;
    private $idType;
    private $idNumber;
    private $mobile;
    private $email;


    /**
     * CreateOrganizationsByThirdPartyUserId constructor.
     * @param $thirdPartyUserId
     * @param $name
     * @param $idType
     * @param $idNumber
     */
    public function __construct($thirdPartyUserId, $name, $idType, $idNumber)
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
        $this->name = $name;
        $this->idType = $idType;
        $this->idNumber = $idNumber;
    }

    /**
     * @return mixed
     */
    public function getThirdPartyUserId()
    {
        return $this->thirdPartyUserId;
    }

    /**
     * @param mixed $thirdPartyUserId
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param mixed $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return mixed
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @param mixed $idNumber
     */
    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function build()
    {
        $this->setUrl("/v1/accounts/createByThirdPartyUserId");
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
