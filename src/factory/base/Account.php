<?php

namespace Abbotton\Esign\factory\base;

use Abbotton\Esign\factory\account\CreateOrganizationsByThirdPartyUserId;
use Abbotton\Esign\factory\account\CreatePersonByThirdPartyUserId;
use Abbotton\Esign\factory\account\DeleteOrganizationsByOrgId;
use Abbotton\Esign\factory\account\DeleteOrganizationsByThirdId;
use Abbotton\Esign\factory\account\DeletePersonByAccountId;
use Abbotton\Esign\factory\account\DeletePersonByThirdId;
use Abbotton\Esign\factory\account\DeleteSignAuth;
use Abbotton\Esign\factory\account\QryOrganizationsByOrgId;
use Abbotton\Esign\factory\account\QryOrganizationsByThirdId;
use Abbotton\Esign\factory\account\QryPersonByaccountId;
use Abbotton\Esign\factory\account\QryPersonByThirdId;
use Abbotton\Esign\factory\account\SetSignAuth;
use Abbotton\Esign\factory\account\SetSignPwd;
use Abbotton\Esign\factory\account\UpdateOrganizationsByOrgId;
use Abbotton\Esign\factory\account\UpdateOrganizationsByThirdId;
use Abbotton\Esign\factory\account\UpdatePersonAccountByAccountId;
use Abbotton\Esign\factory\account\UpdatePersonAccountByThirdId;

/**
 * 轩辕API账号相关功能类
 * @author  澄泓
 * @date  2020/11/19 14:12
 */
class Account
{
    /**
     * 个人账号创建
     * @param $thirdPartyUserId
     * @param $name
     * @param $idType
     * @param $idNumber
     * @return CreatePersonByThirdPartyUserId
     */
    public static function createPersonByThirdPartyUserId($thirdPartyUserId, $name, $idType, $idNumber)
    {
        return new CreatePersonByThirdPartyUserId($thirdPartyUserId, $name, $idType, $idNumber);
    }

    /**
     * 机构账号创建
     * @param $thirdPartyUserId
     * @param $creator
     * @param $name
     * @param $idType
     * @param $idNumber
     * @return CreateOrganizationsByThirdPartyUserId
     */
    public static function createOrganizationsByThirdPartyUserId($thirdPartyUserId, $creator, $name, $idType, $idNumber)
    {
        return new CreateOrganizationsByThirdPartyUserId($thirdPartyUserId, $creator, $name, $idType, $idNumber);
    }

    /**
     * 注销机构账号（按照账号ID注销）
     * @param $orgId
     * @return DeleteOrganizationsByOrgId
     */
    public static function deleteOrganizationsByOrgId($orgId)
    {
        return new DeleteOrganizationsByOrgId($orgId);
    }

    /**
     * 注销机构账号（按照第三方机构ID注销）
     * @param $thirdPartyUserId
     * @return DeleteOrganizationsByThirdId
     */
    public static function deleteOrganizationsByThirdId($thirdPartyUserId)
    {
        return new DeleteOrganizationsByThirdId($thirdPartyUserId);
    }

    /**
     * 注销个人账户（按照账号ID注销）
     * @param $accountId
     * @return DeletePersonByAccountId
     */
    public static function deletePersonByAccountId($accountId)
    {
        return new DeletePersonByAccountId($accountId);
    }

    /**
     * 注销个人账户（按照第三方用户ID注销）
     * @param $thirdPartyUserId
     * @return DeletePersonByThirdId
     */
    public static function deletePersonByThirdId($thirdPartyUserId)
    {
        return new DeletePersonByThirdId($thirdPartyUserId);
    }

    /**
     * 撤销静默签署
     * @param $accountId
     * @return DeleteSignAuth
     */
    public static function deleteSignAuth($accountId)
    {
        return new DeleteSignAuth($accountId);
    }

    /**
     * 查询机构账号（按照账号ID查询）
     * @param $orgId
     * @return QryOrganizationsByOrgId
     */
    public static function qryOrganizationsByOrgId($orgId)
    {
        return new QryOrganizationsByOrgId($orgId);
    }

    /**
     * 查询机构账号（按照第三方机构ID查询）
     * @param $thirdPartyUserId
     * @return QryOrganizationsByThirdId
     */
    public static function qryOrganizationsByThirdId($thirdPartyUserId)
    {
        return new QryOrganizationsByThirdId($thirdPartyUserId);
    }

    /**
     * 查询机构账号（按照账号ID查询）
     * @param $accountId
     * @return QryPersonByaccountId
     */
    public static function qryPersonByaccountId($accountId)
    {
        return new QryPersonByaccountId($accountId);
    }

    /**
     * 查询个人账户（按照第三方用户ID查询）
     * @param $thirdPartyUserId
     * @return QryPersonByThirdId
     */
    public static function qryPersonByThirdId($thirdPartyUserId)
    {
        return new QryPersonByThirdId($thirdPartyUserId);
    }

    /**
     * 设置静默签署
     * @param $accountId
     * @return SetSignAuth
     */
    public static function setSignAuth($accountId)
    {
        return new SetSignAuth($accountId);
    }

    /**
     * 设置签署密码
     * @param $accountId
     * @param $password
     * @return SetSignPwd
     */
    public static function setSignPwd($accountId, $password)
    {
        return new SetSignPwd($accountId, $password);
    }

    /**
     * 机构账号修改（按照账号ID修改）
     * @param $orgId
     * @return UpdateOrganizationsByOrgId
     */
    public static function updateOrganizationsByOrgId($orgId)
    {
        return new UpdateOrganizationsByOrgId($orgId);
    }

    /**
     * 机构账号修改（按照第三方机构ID修改）
     * @param $thirdPartyUserId
     * @return UpdateOrganizationsByThirdId
     */
    public static function updateOrganizationsByThirdId($thirdPartyUserId)
    {
        return new UpdateOrganizationsByThirdId($thirdPartyUserId);
    }

    /**
     * 个人账户修改(按照账号ID修改)
     * @param $accountId
     * @return UpdatePersonAccountByAccountId
     */
    public static function updatePersonAccountByAccountId($accountId)
    {
        return new UpdatePersonAccountByAccountId($accountId);
    }

    /**
     * 个人账户修改(按照第三方用户ID修改)
     * @param $thirdPartyUserId
     * @return UpdatePersonAccountByThirdId
     */
    public static function updatePersonAccountByThirdId($thirdPartyUserId)
    {
        return new UpdatePersonAccountByThirdId($thirdPartyUserId);
    }
}
