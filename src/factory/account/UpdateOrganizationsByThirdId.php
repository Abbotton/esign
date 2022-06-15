<?php

namespace Abbotton\Esign\factory\account;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API机构账号修改（按照第三方机构ID修改）
 * @author  澄泓
 * @date  2020/11/20 14:37
 */
class UpdateOrganizationsByThirdId extends EsignRequest implements \JsonSerializable
{
    private $thirdPartyUserId;
    private $name;
    private $idType;
    private $idNumber;
    private $orgLegalIdNumber;
    private $orgLegalName;

    /**
     * UpdateOrganizationsByThirdId constructor.
     * @param $thirdPartyUserId
     */
    public function __construct($thirdPartyUserId)
    {
        $this->thirdPartyUserId = $thirdPartyUserId;
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
    public function getOrgLegalIdNumber()
    {
        return $this->orgLegalIdNumber;
    }

    /**
     * @param mixed $orgLegalIdNumber
     */
    public function setOrgLegalIdNumber($orgLegalIdNumber)
    {
        $this->orgLegalIdNumber = $orgLegalIdNumber;
    }

    /**
     * @return mixed
     */
    public function getOrgLegalName()
    {
        return $this->orgLegalName;
    }

    /**
     * @param mixed $orgLegalName
     */
    public function setOrgLegalName($orgLegalName)
    {
        $this->orgLegalName = $orgLegalName;
    }


    public function build()
    {
        $this->setUrl("/v1/organizations/updateByThirdId?thirdPartyUserId=" . $this->thirdPartyUserId);
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
            if ($value == null || $key == 'thirdPartyUserId') {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
