<?php
/**
 * ResponseDetailStruct
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * ResponseDetailStruct Class Doc Comment
 *
 * @category Class
 * @description 诊断详细信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseDetailStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'response_detail_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'funnel' => '\TencentAds\Model\DetailFunnelStruct',
        'targetDetail' => '\TencentAds\Model\DetailTargetDetailStruct',
        'competeDetail' => '\TencentAds\Model\DetailCompeteDetailStruct',
        'exposureDetail' => '\TencentAds\Model\ExposureDetailStruct',
        'clickDetail' => '\TencentAds\Model\ClickDetailStruct',
        'conversionDetail' => '\TencentAds\Model\ConversionDetailStruct',
        'cpaDetail' => '\TencentAds\Model\DetailCpaDetailStruct',
        'optimization' => '\TencentAds\Model\OptimizeContentMainStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'funnel' => null,
        'targetDetail' => null,
        'competeDetail' => null,
        'exposureDetail' => null,
        'clickDetail' => null,
        'conversionDetail' => null,
        'cpaDetail' => null,
        'optimization' => null
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
        'funnel' => 'funnel',
        'targetDetail' => 'target_detail',
        'competeDetail' => 'compete_detail',
        'exposureDetail' => 'exposure_detail',
        'clickDetail' => 'click_detail',
        'conversionDetail' => 'conversion_detail',
        'cpaDetail' => 'cpa_detail',
        'optimization' => 'optimization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'funnel' => 'setFunnel',
        'targetDetail' => 'setTargetDetail',
        'competeDetail' => 'setCompeteDetail',
        'exposureDetail' => 'setExposureDetail',
        'clickDetail' => 'setClickDetail',
        'conversionDetail' => 'setConversionDetail',
        'cpaDetail' => 'setCpaDetail',
        'optimization' => 'setOptimization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'funnel' => 'getFunnel',
        'targetDetail' => 'getTargetDetail',
        'competeDetail' => 'getCompeteDetail',
        'exposureDetail' => 'getExposureDetail',
        'clickDetail' => 'getClickDetail',
        'conversionDetail' => 'getConversionDetail',
        'cpaDetail' => 'getCpaDetail',
        'optimization' => 'getOptimization'
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
        $this->container['funnel'] = isset($data['funnel']) ? $data['funnel'] : null;
        $this->container['targetDetail'] = isset($data['targetDetail']) ? $data['targetDetail'] : null;
        $this->container['competeDetail'] = isset($data['competeDetail']) ? $data['competeDetail'] : null;
        $this->container['exposureDetail'] = isset($data['exposureDetail']) ? $data['exposureDetail'] : null;
        $this->container['clickDetail'] = isset($data['clickDetail']) ? $data['clickDetail'] : null;
        $this->container['conversionDetail'] = isset($data['conversionDetail']) ? $data['conversionDetail'] : null;
        $this->container['cpaDetail'] = isset($data['cpaDetail']) ? $data['cpaDetail'] : null;
        $this->container['optimization'] = isset($data['optimization']) ? $data['optimization'] : null;
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
     * Gets funnel
     *
     * @return \TencentAds\Model\DetailFunnelStruct
     */
    public function getFunnel()
    {
        return $this->container['funnel'];
    }

    /**
     * Sets funnel
     *
     * @param \TencentAds\Model\DetailFunnelStruct $funnel funnel
     *
     * @return $this
     */
    public function setFunnel($funnel)
    {
        $this->container['funnel'] = $funnel;

        return $this;
    }

    /**
     * Gets targetDetail
     *
     * @return \TencentAds\Model\DetailTargetDetailStruct
     */
    public function getTargetDetail()
    {
        return $this->container['targetDetail'];
    }

    /**
     * Sets targetDetail
     *
     * @param \TencentAds\Model\DetailTargetDetailStruct $targetDetail targetDetail
     *
     * @return $this
     */
    public function setTargetDetail($targetDetail)
    {
        $this->container['targetDetail'] = $targetDetail;

        return $this;
    }

    /**
     * Gets competeDetail
     *
     * @return \TencentAds\Model\DetailCompeteDetailStruct
     */
    public function getCompeteDetail()
    {
        return $this->container['competeDetail'];
    }

    /**
     * Sets competeDetail
     *
     * @param \TencentAds\Model\DetailCompeteDetailStruct $competeDetail competeDetail
     *
     * @return $this
     */
    public function setCompeteDetail($competeDetail)
    {
        $this->container['competeDetail'] = $competeDetail;

        return $this;
    }

    /**
     * Gets exposureDetail
     *
     * @return \TencentAds\Model\ExposureDetailStruct
     */
    public function getExposureDetail()
    {
        return $this->container['exposureDetail'];
    }

    /**
     * Sets exposureDetail
     *
     * @param \TencentAds\Model\ExposureDetailStruct $exposureDetail exposureDetail
     *
     * @return $this
     */
    public function setExposureDetail($exposureDetail)
    {
        $this->container['exposureDetail'] = $exposureDetail;

        return $this;
    }

    /**
     * Gets clickDetail
     *
     * @return \TencentAds\Model\ClickDetailStruct
     */
    public function getClickDetail()
    {
        return $this->container['clickDetail'];
    }

    /**
     * Sets clickDetail
     *
     * @param \TencentAds\Model\ClickDetailStruct $clickDetail clickDetail
     *
     * @return $this
     */
    public function setClickDetail($clickDetail)
    {
        $this->container['clickDetail'] = $clickDetail;

        return $this;
    }

    /**
     * Gets conversionDetail
     *
     * @return \TencentAds\Model\ConversionDetailStruct
     */
    public function getConversionDetail()
    {
        return $this->container['conversionDetail'];
    }

    /**
     * Sets conversionDetail
     *
     * @param \TencentAds\Model\ConversionDetailStruct $conversionDetail conversionDetail
     *
     * @return $this
     */
    public function setConversionDetail($conversionDetail)
    {
        $this->container['conversionDetail'] = $conversionDetail;

        return $this;
    }

    /**
     * Gets cpaDetail
     *
     * @return \TencentAds\Model\DetailCpaDetailStruct
     */
    public function getCpaDetail()
    {
        return $this->container['cpaDetail'];
    }

    /**
     * Sets cpaDetail
     *
     * @param \TencentAds\Model\DetailCpaDetailStruct $cpaDetail cpaDetail
     *
     * @return $this
     */
    public function setCpaDetail($cpaDetail)
    {
        $this->container['cpaDetail'] = $cpaDetail;

        return $this;
    }

    /**
     * Gets optimization
     *
     * @return \TencentAds\Model\OptimizeContentMainStruct
     */
    public function getOptimization()
    {
        return $this->container['optimization'];
    }

    /**
     * Sets optimization
     *
     * @param \TencentAds\Model\OptimizeContentMainStruct $optimization optimization
     *
     * @return $this
     */
    public function setOptimization($optimization)
    {
        $this->container['optimization'] = $optimization;

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

