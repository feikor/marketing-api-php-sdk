<?php
/**
 * CampaignsPreferenceType
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
 * CampaignsPreferenceType Class Doc Comment
 *
 * @category Class
 * @description 优选类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsPreferenceType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const PREFERENCE_TYPE_DEFAULT = 'PREFERENCE_TYPE_DEFAULT';
    const PREFERENCE_TYPE_REACHMAX = 'PREFERENCE_TYPE_REACHMAX';
    const PREFERENCE_TYPE_ADX = 'PREFERENCE_TYPE_ADX';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PREFERENCE_TYPE_DEFAULT,
            self::PREFERENCE_TYPE_REACHMAX,
            self::PREFERENCE_TYPE_ADX,
        ];
    }
}

