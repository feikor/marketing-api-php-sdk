<?php
/**
 * MediaMediaSystemStatus
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
 * MediaMediaSystemStatus Class Doc Comment
 *
 * @category Class
 * @description 转码状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaMediaSystemStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const MEDIA_STATUS_VALID = 'MEDIA_STATUS_VALID';
    const MEDIA_STATUS_PENDING = 'MEDIA_STATUS_PENDING';
    const MEDIA_STATUS_ERROR = 'MEDIA_STATUS_ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::MEDIA_STATUS_VALID,
            self::MEDIA_STATUS_PENDING,
            self::MEDIA_STATUS_ERROR,
        ];
    }
}

