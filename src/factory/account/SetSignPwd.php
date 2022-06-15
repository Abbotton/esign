<?php

namespace Abbotton\Esign\factory\account;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API设置签署密码
 * @author  澄泓
 * @date  2020/11/20 14:10
 */
class SetSignPwd extends EsignRequest implements \JsonSerializable
{
    private $accountId;
    private $password;

    /**
     * SetSignPwd constructor.
     * @param $accountId
     * @param $password
     */
    public function __construct($accountId, $password)
    {
        $this->accountId = $accountId;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param mixed $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function build()
    {
        $this->setUrl("/v1/accounts/" . $this->accountId . "/setSignPwd");
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
            if ($value == null || $key == 'accountId') {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
