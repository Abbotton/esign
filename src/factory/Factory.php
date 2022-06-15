<?php

namespace Abbotton\Esign\factory;

/**
 * 基础信息初始化类
 * @author  澄泓
 * @date  2020/11/18 15:15
 * @version
 */
class Factory
{
    // 请求域名
    private static $host;
    // 项目Id(应用Id）
    private static $project_id;
    // 项目密钥(应用密钥）
    private static $project_scert;

    private static $debug = false;

    //设置代理
    private static $ENABLE_HTTP_PROXY;//是否代理
    private static $HTTP_PROXY_IP;//ip
    private static $HTTP_PROXY_PORT;//网关


    /**
     * Factory constructor.
     * @param $host
     * @param $project_id
     * @param $project_scert
     */
    public static function init($project_id, $project_scert, $host = 'https://openapi.esign.cn')
    {
        self::$host = $host;
        self::$project_id = $project_id;
        self::$project_scert = $project_scert;
    }


    /**
     * @return mixed
     */
    public static function getHost()
    {
        return self::$host;
    }

    /**
     * @param mixed $host
     */
    public static function setHost($host)
    {
        self::$host = $host;
    }

    /**
     * @return mixed
     */
    public static function getProjectId()
    {
        return self::$project_id;
    }

    /**
     * @param mixed $project_id
     */
    public static function setProjectId($project_id)
    {
        self::$project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public static function getProjectScert()
    {
        return self::$project_scert;
    }

    /**
     * @param mixed $project_scert
     */
    public static function setProjectScert($project_scert)
    {
        self::$project_scert = $project_scert;
    }

    /**
     * @return string
     */
    public static function getDebug()
    {
        return self::$debug;
    }

    /**
     * @param bool $debug
     */
    public static function setDebug(bool $debug = false)
    {
        self::$debug = $debug;
    }

    /**
     * @return mixed
     */
    public static function getENABLEHTTPPROXY()
    {
        return self::$ENABLE_HTTP_PROXY;
    }

    /**
     * @param mixed $ENABLE_HTTP_PROXY
     */
    public static function setENABLEHTTPPROXY($ENABLE_HTTP_PROXY)
    {
        self::$ENABLE_HTTP_PROXY = $ENABLE_HTTP_PROXY;
    }

    /**
     * @return mixed
     */
    public static function getHTTPPROXYIP()
    {
        return self::$HTTP_PROXY_IP;
    }

    /**
     * @param mixed $HTTP_PROXY_IP
     */
    public static function setHTTPPROXYIP($HTTP_PROXY_IP)
    {
        self::$HTTP_PROXY_IP = $HTTP_PROXY_IP;
    }

    /**
     * @return mixed
     */
    public static function getHTTPPROXYPORT()
    {
        return self::$HTTP_PROXY_PORT;
    }

    /**
     * @param mixed $HTTP_PROXY_PORT
     */
    public static function setHTTPPROXYPORT($HTTP_PROXY_PORT)
    {
        self::$HTTP_PROXY_PORT = $HTTP_PROXY_PORT;
    }
}
