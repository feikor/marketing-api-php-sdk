<?php
/**
 * CustomerSystemStatus
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
 * OpenAPI spec version: 1.3
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
 * CustomerSystemStatus Class Doc Comment
 *
 * @category Class
 * @description 客户系统状态，详见 &lt;a href&#x3D;&#39;api_customer_system_status&#39; target&#x3D;&#39;_blank&#39;&gt;[客户系统状态]&lt;/a&gt;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerSystemStatus
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'CUSTOMER_STATUS_NORMAL';
    const PENDING = 'CUSTOMER_STATUS_PENDING';
    const DENIED = 'CUSTOMER_STATUS_DENIED';
    const FROZEN = 'CUSTOMER_STATUS_FROZEN';
    const TOBE_ACCEPTED = 'CUSTOMER_STATUS_TOBE_ACCEPTED';
    const TOBE_ACTIVATED = 'CUSTOMER_STATUS_TOBE_ACTIVATED';
    const SUSPEND = 'CUSTOMER_STATUS_SUSPEND';
    const MATERIAL_PREPARED = 'CUSTOMER_STATUS_MATERIAL_PREPARED';
    const DELETED = 'CUSTOMER_STATUS_DELETED';
    const FROZEN_TEMPORARILY = 'CUSTOMER_STATUS_FROZEN_TEMPORARILY';
    const UNREGISTERED = 'CUSTOMER_STATUS_UNREGISTERED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::PENDING,
            self::DENIED,
            self::FROZEN,
            self::TOBE_ACCEPTED,
            self::TOBE_ACTIVATED,
            self::SUSPEND,
            self::MATERIAL_PREPARED,
            self::DELETED,
            self::FROZEN_TEMPORARILY,
            self::UNREGISTERED,
        ];
    }
}

