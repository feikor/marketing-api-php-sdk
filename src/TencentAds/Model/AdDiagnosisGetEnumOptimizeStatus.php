<?php
/**
 * AdDiagnosisGetEnumOptimizeStatus
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
 * AdDiagnosisGetEnumOptimizeStatus Class Doc Comment
 *
 * @category Class
 * @description 优化状态枚举
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdDiagnosisGetEnumOptimizeStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const ATTRIBUTE_ECPM = 'ATTRIBUTE_ECPM';
    const ATTRIBUTE_BID = 'ATTRIBUTE_BID';
    const ATTRIBUTE_PCTR = 'ATTRIBUTE_PCTR';
    const ATTRIBUTE_TARGETING = 'ATTRIBUTE_TARGETING';
    const ATTRIBUTE_COLD_START = 'ATTRIBUTE_COLD_START';
    const ATTRIBUTE_EXPERIMENT = 'ATTRIBUTE_EXPERIMENT';
    const ATTRIBUTE_CAMPAIGN = 'ATTRIBUTE_CAMPAIGN';
    const ATTRIBUTE_EXPERIENCE_OTHERS = 'ATTRIBUTE_EXPERIENCE_OTHERS';
    const ATTRIBUTE_OTHERS = 'ATTRIBUTE_OTHERS';
    const ATTRIBUTE_EXPERIENCE_PRODUCT = 'ATTRIBUTE_EXPERIENCE_PRODUCT';
    const ATTRIBUTE_EXPERIENCE_CREATIVE = 'ATTRIBUTE_EXPERIENCE_CREATIVE';
    const ATTRIBUTE_LEARNING_FAILED = 'ATTRIBUTE_LEARNING_FAILED';
    const ATTRIBUTE_EXPERIENCE_FEEDBACK = 'ATTRIBUTE_EXPERIENCE_FEEDBACK';
    const ATTRIBUTE_EXPERIENCE_FRESHNESS = 'ATTRIBUTE_EXPERIENCE_FRESHNESS';
    const ATTRIBUTE_BUDGET = 'ATTRIBUTE_BUDGET';
    const ATTRIBUTE_INNER_COMPETE = 'ATTRIBUTE_INNER_COMPETE';
    const ATTRIBUTE_PCVR = 'ATTRIBUTE_PCVR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ATTRIBUTE_ECPM,
            self::ATTRIBUTE_BID,
            self::ATTRIBUTE_PCTR,
            self::ATTRIBUTE_TARGETING,
            self::ATTRIBUTE_COLD_START,
            self::ATTRIBUTE_EXPERIMENT,
            self::ATTRIBUTE_CAMPAIGN,
            self::ATTRIBUTE_EXPERIENCE_OTHERS,
            self::ATTRIBUTE_OTHERS,
            self::ATTRIBUTE_EXPERIENCE_PRODUCT,
            self::ATTRIBUTE_EXPERIENCE_CREATIVE,
            self::ATTRIBUTE_LEARNING_FAILED,
            self::ATTRIBUTE_EXPERIENCE_FEEDBACK,
            self::ATTRIBUTE_EXPERIENCE_FRESHNESS,
            self::ATTRIBUTE_BUDGET,
            self::ATTRIBUTE_INNER_COMPETE,
            self::ATTRIBUTE_PCVR,
        ];
    }
}

