<?php
/**
 * LeadsStatusInfoStruct
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
 * LeadsStatusInfoStruct Class Doc Comment
 *
 * @category Class
 * @description 回传信息结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsStatusInfoStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'leads_status_info_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leadsId' => 'int',
        'leadsConvertType' => '\TencentAds\Model\LeadCluesLeadsConvertType',
        'leadsIneffectReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leadsId' => 'int64',
        'leadsConvertType' => null,
        'leadsIneffectReason' => null
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
        'leadsId' => 'leads_id',
        'leadsConvertType' => 'leads_convert_type',
        'leadsIneffectReason' => 'leads_ineffect_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leadsId' => 'setLeadsId',
        'leadsConvertType' => 'setLeadsConvertType',
        'leadsIneffectReason' => 'setLeadsIneffectReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leadsId' => 'getLeadsId',
        'leadsConvertType' => 'getLeadsConvertType',
        'leadsIneffectReason' => 'getLeadsIneffectReason'
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
        $this->container['leadsId'] = isset($data['leadsId']) ? $data['leadsId'] : null;
        $this->container['leadsConvertType'] = isset($data['leadsConvertType']) ? $data['leadsConvertType'] : null;
        $this->container['leadsIneffectReason'] = isset($data['leadsIneffectReason']) ? $data['leadsIneffectReason'] : null;
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
     * Gets leadsId
     *
     * @return int
     */
    public function getLeadsId()
    {
        return $this->container['leadsId'];
    }

    /**
     * Sets leadsId
     *
     * @param int $leadsId leadsId
     *
     * @return $this
     */
    public function setLeadsId($leadsId)
    {
        $this->container['leadsId'] = $leadsId;

        return $this;
    }

    /**
     * Gets leadsConvertType
     *
     * @return \TencentAds\Model\LeadCluesLeadsConvertType
     */
    public function getLeadsConvertType()
    {
        return $this->container['leadsConvertType'];
    }

    /**
     * Sets leadsConvertType
     *
     * @param \TencentAds\Model\LeadCluesLeadsConvertType $leadsConvertType leadsConvertType
     *
     * @return $this
     */
    public function setLeadsConvertType($leadsConvertType)
    {
        $this->container['leadsConvertType'] = $leadsConvertType;

        return $this;
    }

    /**
     * Gets leadsIneffectReason
     *
     * @return string
     */
    public function getLeadsIneffectReason()
    {
        return $this->container['leadsIneffectReason'];
    }

    /**
     * Sets leadsIneffectReason
     *
     * @param string $leadsIneffectReason leadsIneffectReason
     *
     * @return $this
     */
    public function setLeadsIneffectReason($leadsIneffectReason)
    {
        $this->container['leadsIneffectReason'] = $leadsIneffectReason;

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

