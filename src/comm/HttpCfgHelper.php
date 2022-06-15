<?php

namespace Abbotton\Esign\comm;

use Abbotton\Esign\factory\Factory;
use Abbotton\Esign\factory\response\EsignResponse;

/**
 * 轩辕API网络请求配置工具类
 * @author  澄泓
 * @date  2020/11/18 14:27
 * @version JDK1.7
 */
class HttpCfgHelper
{
    public static $connectTimeout = 30;//30 second
    public static $readTimeout = 80;//80 second

    //常规请求类
    public static function sendHttp($reqType = 'GET', $url, $headers = array(), $param = null)
    {
        $logData = [
            'url' => $url,
            'httpMethod' => $reqType,
            'data' => $param,
            'header' => $headers
        ];
        $flag = Factory::getDebug();
        if ($flag) {
            self::writeLog('curl data:');
            self::writeLog($logData);
            var_dump("请求url" . $url);
            var_dump("请求参数" . $param);
            var_dump("请求方法" . $reqType);
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $reqType);
        if (Factory::getENABLEHTTPPROXY()) {
            curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_PROXY, Factory::getHTTPPROXYIP());
            curl_setopt($ch, CURLOPT_PROXYPORT, Factory::getHTTPPROXYPORT());
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $postData = is_array($param) ? json_encode($param, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) : $param;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        if (self::$readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        }
        if (self::$connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        }
        //https request
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        if (is_array($headers) && 0 < count($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $curlRes = curl_exec($ch);
        if ($flag) {
            self::writeLog('curl response:');
            self::writeLog($curlRes);
            var_dump("响应" . $curlRes);
        }


        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return new EsignResponse($httpCode, $curlRes);
    }

    public static function writeLog($text)
    {
        if (is_array($text) || is_object($text)) {
            $text = json_encode($text);
        }
        file_put_contents("../phplog.txt", date("Y-m-d H:i:s") . "  " . $text . "\r\n", FILE_APPEND);
    }

    /**
     * 上传文件
     * @param $uploadUrls
     * @param $contentMd5
     * @param $fileContent
     * @param $ContenType
     * @return EsignResponse
     */
    public static function upLoadFileHttp($uploadUrls, $contentMd5, $fileContent, $ContenType)
    {
        $header = array(
            'Content-Type:' . $ContenType,
            'Content-Md5:' . $contentMd5
        );


        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $uploadUrls);
        curl_setopt($curl_handle, CURLOPT_FILETIME, true);
        curl_setopt($curl_handle, CURLOPT_FRESH_CONNECT, false);
//            curl_setopt($curl_handle, CURLOPT_HEADER, true); // 输出HTTP头 true
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_handle, CURLOPT_TIMEOUT, 5184000);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 120);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, false);

        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'PUT');

        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $fileContent);
        if (is_array($header) && 0 < count($header)) {
            curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $header);
        }
        $curlRes = curl_exec($curl_handle);
        $httpCode = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);
        self::writeLog($curlRes);
        curl_close($curl_handle);
        return new EsignResponse($httpCode, $curlRes);
    }
}
