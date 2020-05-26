<?php
/**
 * UnionPositionPackagesUnionPackageType
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
 * UnionPositionPackagesUnionPackageType Class Doc Comment
 *
 * @category Class
 * @description 流量包类型 枚举列表：UNION_PACKAGE_TYPE_INCLUDE（定投）、UNION_PACKAGE_TYPE_EXCLUDE（屏蔽）
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnionPositionPackagesUnionPackageType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const UNION_PACKAGE_TYPE_INCLUDE = 'UNION_PACKAGE_TYPE_INCLUDE';
    const UNION_PACKAGE_TYPE_EXCLUDE = 'UNION_PACKAGE_TYPE_EXCLUDE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::UNION_PACKAGE_TYPE_INCLUDE,
            self::UNION_PACKAGE_TYPE_EXCLUDE,
        ];
    }
}

