<?php
/**
 * AsyncTasksGetChannelPackageTaskStatus
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
 * AsyncTasksGetChannelPackageTaskStatus Class Doc Comment
 *
 * @category Class
 * @description 渠道包任务处理状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AsyncTasksGetChannelPackageTaskStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const CHANNEL_TASK_STATUS_PENDING = 'CHANNEL_TASK_STATUS_PENDING';
    const CHANNEL_TASK_STATUS_PROCESSING = 'CHANNEL_TASK_STATUS_PROCESSING';
    const CHANNEL_TASK_STATUS_ERROR = 'CHANNEL_TASK_STATUS_ERROR';
    const CHANNEL_TASK_STATUS_COMPLETED = 'CHANNEL_TASK_STATUS_COMPLETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CHANNEL_TASK_STATUS_PENDING,
            self::CHANNEL_TASK_STATUS_PROCESSING,
            self::CHANNEL_TASK_STATUS_ERROR,
            self::CHANNEL_TASK_STATUS_COMPLETED,
        ];
    }
}

