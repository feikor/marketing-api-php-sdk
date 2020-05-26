<?php
/**
 * WechatAdFollowersPositionType
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
 * WechatAdFollowersPositionType Class Doc Comment
 *
 * @category Class
 * @description 微信广告位信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatAdFollowersPositionType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_BOTTOM = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_BOTTOM';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_TOP = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_TOP';
    const POSITION_TYPE_WECHAT_TENCENT_NEWS = 'POSITION_TYPE_WECHAT_TENCENT_NEWS';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_VIDEO = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_VIDEO';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MUTUAL_ELECTION = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MUTUAL_ELECTION';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE';
    const POSITION_TYPE_TENCENT_MAILBOX = 'POSITION_TYPE_TENCENT_MAILBOX';
    const POSITION_TYPE_WECHAT_MINI_PROGRAM_BANNER = 'POSITION_TYPE_WECHAT_MINI_PROGRAM_BANNER';
    const POSITION_TYPE_WECHAT_REWARD = 'POSITION_TYPE_WECHAT_REWARD';
    const POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE_PRODUCT = 'POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE_PRODUCT';
    const POSITION_TYPE_WECHAT_MINI_PROGRAM_INTERSTITIAL = 'POSITION_TYPE_WECHAT_MINI_PROGRAM_INTERSTITIAL';
    const POSITION_TYPE_WECHAT_AD_BOX = 'POSITION_TYPE_WECHAT_AD_BOX';
    const POSITION_TYPE_WECHAT_MOMENTS = 'POSITION_TYPE_WECHAT_MOMENTS';
    const POSITION_TYPE_WECHAT_NULL = 'POSITION_TYPE_WECHAT_NULL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_BOTTOM,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_TOP,
            self::POSITION_TYPE_WECHAT_TENCENT_NEWS,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_VIDEO,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MUTUAL_ELECTION,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE,
            self::POSITION_TYPE_TENCENT_MAILBOX,
            self::POSITION_TYPE_WECHAT_MINI_PROGRAM_BANNER,
            self::POSITION_TYPE_WECHAT_REWARD,
            self::POSITION_TYPE_WECHAT_OFFICIAL_ACCOUNT_MIDDLE_PRODUCT,
            self::POSITION_TYPE_WECHAT_MINI_PROGRAM_INTERSTITIAL,
            self::POSITION_TYPE_WECHAT_AD_BOX,
            self::POSITION_TYPE_WECHAT_MOMENTS,
            self::POSITION_TYPE_WECHAT_NULL,
        ];
    }
}

