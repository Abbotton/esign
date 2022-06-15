<?php

namespace Abbotton\Esign\factory\filetemplate;

use Abbotton\Esign\enum\HttpEnum;
use Abbotton\Esign\factory\request\EsignRequest;

/**
 * 轩辕API通过上传方式创建文件
 * @author  澄泓
 * @date  2020/11/23 14:34
 */
class GetFileUploadUrl extends EsignRequest implements \JsonSerializable
{
    private $contentMd5;
    private $contentType;
    private $convert2Pdf;
    private $fileName;
    private $fileSize;
    private $accountId;

    /**
     * GetFileUploadUrl constructor.
     * @param $contentMd5
     * @param $contentType
     * @param $convert2Pdf
     * @param $fileName
     * @param $fileSize
     */
    public function __construct($contentMd5, $contentType, $convert2Pdf, $fileName, $fileSize)
    {
        $this->contentMd5 = $contentMd5;
        $this->contentType = $contentType;
        $this->convert2Pdf = $convert2Pdf;
        $this->fileName = $fileName;
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getContentMd5()
    {
        return $this->contentMd5;
    }

    /**
     * @param mixed $contentMd5
     */
    public function setContentMd5($contentMd5)
    {
        $this->contentMd5 = $contentMd5;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return mixed
     */
    public function getConvert2Pdf()
    {
        return $this->convert2Pdf;
    }

    /**
     * @param mixed $convert2Pdf
     */
    public function setConvert2Pdf($convert2Pdf)
    {
        $this->convert2Pdf = $convert2Pdf;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
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


    public function build()
    {
        $this->setUrl("/v1/files/getUploadUrl");
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
            if ($value===null) {
                continue;
            }
            $json[$key] = $value;
        }
        return $json;
    }
}
