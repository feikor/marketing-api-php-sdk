<?php
/**
 * MediaMediaType
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;
use \TencentAds\ObjectSerializer;

/**
 * MediaMediaType Class Doc Comment
 *
 * @category Class
 * @description 视频类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaMediaType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const MEDIA_TYPE_MP4 = 'MEDIA_TYPE_MP4';
    const MEDIA_TYPE_AVI = 'MEDIA_TYPE_AVI';
    const MEDIA_TYPE_MOV = 'MEDIA_TYPE_MOV';
    const MEDIA_TYPE_FLV = 'MEDIA_TYPE_FLV';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::MEDIA_TYPE_MP4,
            self::MEDIA_TYPE_AVI,
            self::MEDIA_TYPE_MOV,
            self::MEDIA_TYPE_FLV,
        ];
    }
}

