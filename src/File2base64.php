<?php

/*
 * This file is part of the wuyumin/file2base64.
 * (c) Yumin Wu
 * Github: https://github.com/wuyumin
 */

namespace File2base64;

class File2base64
{
    /**
     * @var array
     */
    protected $typeArray = [
        'mp3' => 'audio/mp3',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'ico' => 'image/x-icon',
    ];

    /**
     * File2base64 constructor.
     *
     * @param array $arr
     */
    public function __construct(array $arr = [])
    {
        $this->typeArray = array_merge($this->typeArray, $arr);
    }

    /**
     * @param $fileName
     *
     * @return bool|string
     */
    public function getSuffix($fileName)
    {
        if (false === stripos($fileName, '.')) {
            return false;
        }
        $arr = explode('.', $fileName);

        return trim(end($arr));
    }

    /**
     * @param $fileName
     *
     * @return bool|string
     */
    public function toBase64($fileName)
    {
        if ($fileName && $this->getSuffix($fileName) && is_file($fileName) && isset($this->typeArray[$this->getSuffix($fileName)])) {
            return 'data:'.$this->typeArray[$this->getSuffix($fileName)].';base64,'.base64_encode(file_get_contents($fileName));
        }

        return false;
    }

    /**
     * @param $fileName
     * @param $filePath
     *
     * @return bool
     */
    public function toFile($fileName, $filePath)
    {
        if ($fileName && $filePath && is_file($fileName) && isset($this->typeArray[$this->getSuffix($fileName)])) {
            if (false !== file_put_contents($filePath, $this->toBase64($fileName))) {
                return true;
            }
        }

        return false;
    }
}
