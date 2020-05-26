<?php
/**
 * AdvertiserWebsiteAuditStatus
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
 * AdvertiserWebsiteAuditStatus Class Doc Comment
 *
 * @category Class
 * @description 推广站点系统状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserWebsiteAuditStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const WEBSITE_STATUS_NORMAL = 'WEBSITE_STATUS_NORMAL';
    const WEBSITE_STATUS_PENDING = 'WEBSITE_STATUS_PENDING';
    const WEBSITE_STATUS_DENIED = 'WEBSITE_STATUS_DENIED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::WEBSITE_STATUS_NORMAL,
            self::WEBSITE_STATUS_PENDING,
            self::WEBSITE_STATUS_DENIED,
        ];
    }
}

