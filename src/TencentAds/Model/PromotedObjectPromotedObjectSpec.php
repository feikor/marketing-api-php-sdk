<?php
/**
 * PromotedObjectPromotedObjectSpec
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
 * PromotedObjectPromotedObjectSpec Class Doc Comment
 *
 * @category Class
 * @description 推广目标详细信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedObjectPromotedObjectSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'promoted_object_promoted_object_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jdItem' => '\TencentAds\Model\PromotedObjectEcInfo',
        'jdShop' => '\TencentAds\Model\PromotedObjectEcInfo',
        'dianpingShop' => '\TencentAds\Model\PromotedObjectProductTypeDianpingShop'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jdItem' => null,
        'jdShop' => null,
        'dianpingShop' => null
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
        'jdItem' => 'jd_item',
        'jdShop' => 'jd_shop',
        'dianpingShop' => 'dianping_shop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jdItem' => 'setJdItem',
        'jdShop' => 'setJdShop',
        'dianpingShop' => 'setDianpingShop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jdItem' => 'getJdItem',
        'jdShop' => 'getJdShop',
        'dianpingShop' => 'getDianpingShop'
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
        $this->container['jdItem'] = isset($data['jdItem']) ? $data['jdItem'] : null;
        $this->container['jdShop'] = isset($data['jdShop']) ? $data['jdShop'] : null;
        $this->container['dianpingShop'] = isset($data['dianpingShop']) ? $data['dianpingShop'] : null;
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
     * Gets jdItem
     *
     * @return \TencentAds\Model\PromotedObjectEcInfo
     */
    public function getJdItem()
    {
        return $this->container['jdItem'];
    }

    /**
     * Sets jdItem
     *
     * @param \TencentAds\Model\PromotedObjectEcInfo $jdItem jdItem
     *
     * @return $this
     */
    public function setJdItem($jdItem)
    {
        $this->container['jdItem'] = $jdItem;

        return $this;
    }

    /**
     * Gets jdShop
     *
     * @return \TencentAds\Model\PromotedObjectEcInfo
     */
    public function getJdShop()
    {
        return $this->container['jdShop'];
    }

    /**
     * Sets jdShop
     *
     * @param \TencentAds\Model\PromotedObjectEcInfo $jdShop jdShop
     *
     * @return $this
     */
    public function setJdShop($jdShop)
    {
        $this->container['jdShop'] = $jdShop;

        return $this;
    }

    /**
     * Gets dianpingShop
     *
     * @return \TencentAds\Model\PromotedObjectProductTypeDianpingShop
     */
    public function getDianpingShop()
    {
        return $this->container['dianpingShop'];
    }

    /**
     * Sets dianpingShop
     *
     * @param \TencentAds\Model\PromotedObjectProductTypeDianpingShop $dianpingShop dianpingShop
     *
     * @return $this
     */
    public function setDianpingShop($dianpingShop)
    {
        $this->container['dianpingShop'] = $dianpingShop;

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

