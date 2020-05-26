<?php
/**
 * AdCreativeInsideCreativeExtSpec
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * AdCreativeInsideCreativeExtSpec Class Doc Comment
 *
 * @category Class
 * @description 框内创意扩展信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdCreativeInsideCreativeExtSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_creative_inside_creative_ext_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'param' => 'string',
        'creativeParam' => 'string',
        'passthroughParams' => 'string',
        'displayCode' => 'string',
        'useNoClick' => '\TencentAds\Model\AdCreativeCreativeExtSpecUseNoClick',
        'duration' => 'int',
        'innerReportTime' => 'int',
        'allowTvQrcode' => 'bool',
        'allowTvDisplay' => 'bool',
        'clickUrl2' => 'string',
        'clickUrl3' => 'string',
        'h5SupportRichmedia' => 'bool',
        'needQrUrl' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'param' => null,
        'creativeParam' => null,
        'passthroughParams' => null,
        'displayCode' => null,
        'useNoClick' => null,
        'duration' => 'int64',
        'innerReportTime' => 'int64',
        'allowTvQrcode' => null,
        'allowTvDisplay' => null,
        'clickUrl2' => null,
        'clickUrl3' => null,
        'h5SupportRichmedia' => null,
        'needQrUrl' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'param' => 'param',
        'creativeParam' => 'creative_param',
        'passthroughParams' => 'passthrough_params',
        'displayCode' => 'display_code',
        'useNoClick' => 'use_no_click',
        'duration' => 'duration',
        'innerReportTime' => 'inner_report_time',
        'allowTvQrcode' => 'allow_tv_qrcode',
        'allowTvDisplay' => 'allow_tv_display',
        'clickUrl2' => 'click_url2',
        'clickUrl3' => 'click_url3',
        'h5SupportRichmedia' => 'h5_support_richmedia',
        'needQrUrl' => 'need_qr_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'param' => 'setParam',
        'creativeParam' => 'setCreativeParam',
        'passthroughParams' => 'setPassthroughParams',
        'displayCode' => 'setDisplayCode',
        'useNoClick' => 'setUseNoClick',
        'duration' => 'setDuration',
        'innerReportTime' => 'setInnerReportTime',
        'allowTvQrcode' => 'setAllowTvQrcode',
        'allowTvDisplay' => 'setAllowTvDisplay',
        'clickUrl2' => 'setClickUrl2',
        'clickUrl3' => 'setClickUrl3',
        'h5SupportRichmedia' => 'setH5SupportRichmedia',
        'needQrUrl' => 'setNeedQrUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'param' => 'getParam',
        'creativeParam' => 'getCreativeParam',
        'passthroughParams' => 'getPassthroughParams',
        'displayCode' => 'getDisplayCode',
        'useNoClick' => 'getUseNoClick',
        'duration' => 'getDuration',
        'innerReportTime' => 'getInnerReportTime',
        'allowTvQrcode' => 'getAllowTvQrcode',
        'allowTvDisplay' => 'getAllowTvDisplay',
        'clickUrl2' => 'getClickUrl2',
        'clickUrl3' => 'getClickUrl3',
        'h5SupportRichmedia' => 'getH5SupportRichmedia',
        'needQrUrl' => 'getNeedQrUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
        $this->container['creativeParam'] = isset($data['creativeParam']) ? $data['creativeParam'] : null;
        $this->container['passthroughParams'] = isset($data['passthroughParams']) ? $data['passthroughParams'] : null;
        $this->container['displayCode'] = isset($data['displayCode']) ? $data['displayCode'] : null;
        $this->container['useNoClick'] = isset($data['useNoClick']) ? $data['useNoClick'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['innerReportTime'] = isset($data['innerReportTime']) ? $data['innerReportTime'] : null;
        $this->container['allowTvQrcode'] = isset($data['allowTvQrcode']) ? $data['allowTvQrcode'] : null;
        $this->container['allowTvDisplay'] = isset($data['allowTvDisplay']) ? $data['allowTvDisplay'] : null;
        $this->container['clickUrl2'] = isset($data['clickUrl2']) ? $data['clickUrl2'] : null;
        $this->container['clickUrl3'] = isset($data['clickUrl3']) ? $data['clickUrl3'] : null;
        $this->container['h5SupportRichmedia'] = isset($data['h5SupportRichmedia']) ? $data['h5SupportRichmedia'] : null;
        $this->container['needQrUrl'] = isset($data['needQrUrl']) ? $data['needQrUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param string $param param
     *
     * @return $this
     */
    public function setParam($param)
    {
        $this->container['param'] = $param;

        return $this;
    }

    /**
     * Gets creativeParam
     *
     * @return string
     */
    public function getCreativeParam()
    {
        return $this->container['creativeParam'];
    }

    /**
     * Sets creativeParam
     *
     * @param string $creativeParam creativeParam
     *
     * @return $this
     */
    public function setCreativeParam($creativeParam)
    {
        $this->container['creativeParam'] = $creativeParam;

        return $this;
    }

    /**
     * Gets passthroughParams
     *
     * @return string
     */
    public function getPassthroughParams()
    {
        return $this->container['passthroughParams'];
    }

    /**
     * Sets passthroughParams
     *
     * @param string $passthroughParams passthroughParams
     *
     * @return $this
     */
    public function setPassthroughParams($passthroughParams)
    {
        $this->container['passthroughParams'] = $passthroughParams;

        return $this;
    }

    /**
     * Gets displayCode
     *
     * @return string
     */
    public function getDisplayCode()
    {
        return $this->container['displayCode'];
    }

    /**
     * Sets displayCode
     *
     * @param string $displayCode displayCode
     *
     * @return $this
     */
    public function setDisplayCode($displayCode)
    {
        $this->container['displayCode'] = $displayCode;

        return $this;
    }

    /**
     * Gets useNoClick
     *
     * @return \TencentAds\Model\AdCreativeCreativeExtSpecUseNoClick
     */
    public function getUseNoClick()
    {
        return $this->container['useNoClick'];
    }

    /**
     * Sets useNoClick
     *
     * @param \TencentAds\Model\AdCreativeCreativeExtSpecUseNoClick $useNoClick useNoClick
     *
     * @return $this
     */
    public function setUseNoClick($useNoClick)
    {
        $this->container['useNoClick'] = $useNoClick;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets innerReportTime
     *
     * @return int
     */
    public function getInnerReportTime()
    {
        return $this->container['innerReportTime'];
    }

    /**
     * Sets innerReportTime
     *
     * @param int $innerReportTime innerReportTime
     *
     * @return $this
     */
    public function setInnerReportTime($innerReportTime)
    {
        $this->container['innerReportTime'] = $innerReportTime;

        return $this;
    }

    /**
     * Gets allowTvQrcode
     *
     * @return bool
     */
    public function getAllowTvQrcode()
    {
        return $this->container['allowTvQrcode'];
    }

    /**
     * Sets allowTvQrcode
     *
     * @param bool $allowTvQrcode allowTvQrcode
     *
     * @return $this
     */
    public function setAllowTvQrcode($allowTvQrcode)
    {
        $this->container['allowTvQrcode'] = $allowTvQrcode;

        return $this;
    }

    /**
     * Gets allowTvDisplay
     *
     * @return bool
     */
    public function getAllowTvDisplay()
    {
        return $this->container['allowTvDisplay'];
    }

    /**
     * Sets allowTvDisplay
     *
     * @param bool $allowTvDisplay allowTvDisplay
     *
     * @return $this
     */
    public function setAllowTvDisplay($allowTvDisplay)
    {
        $this->container['allowTvDisplay'] = $allowTvDisplay;

        return $this;
    }

    /**
     * Gets clickUrl2
     *
     * @return string
     */
    public function getClickUrl2()
    {
        return $this->container['clickUrl2'];
    }

    /**
     * Sets clickUrl2
     *
     * @param string $clickUrl2 clickUrl2
     *
     * @return $this
     */
    public function setClickUrl2($clickUrl2)
    {
        $this->container['clickUrl2'] = $clickUrl2;

        return $this;
    }

    /**
     * Gets clickUrl3
     *
     * @return string
     */
    public function getClickUrl3()
    {
        return $this->container['clickUrl3'];
    }

    /**
     * Sets clickUrl3
     *
     * @param string $clickUrl3 clickUrl3
     *
     * @return $this
     */
    public function setClickUrl3($clickUrl3)
    {
        $this->container['clickUrl3'] = $clickUrl3;

        return $this;
    }

    /**
     * Gets h5SupportRichmedia
     *
     * @return bool
     */
    public function getH5SupportRichmedia()
    {
        return $this->container['h5SupportRichmedia'];
    }

    /**
     * Sets h5SupportRichmedia
     *
     * @param bool $h5SupportRichmedia h5SupportRichmedia
     *
     * @return $this
     */
    public function setH5SupportRichmedia($h5SupportRichmedia)
    {
        $this->container['h5SupportRichmedia'] = $h5SupportRichmedia;

        return $this;
    }

    /**
     * Gets needQrUrl
     *
     * @return bool
     */
    public function getNeedQrUrl()
    {
        return $this->container['needQrUrl'];
    }

    /**
     * Sets needQrUrl
     *
     * @param bool $needQrUrl needQrUrl
     *
     * @return $this
     */
    public function setNeedQrUrl($needQrUrl)
    {
        $this->container['needQrUrl'] = $needQrUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

