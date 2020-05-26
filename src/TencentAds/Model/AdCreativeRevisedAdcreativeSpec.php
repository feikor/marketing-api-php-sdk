<?php
/**
 * AdCreativeRevisedAdcreativeSpec
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
 * AdCreativeRevisedAdcreativeSpec Class Doc Comment
 *
 * @category Class
 * @description 修改后的创意内容，当且仅当 online_enabled &#x3D; true 时，此字段允许写入
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdCreativeRevisedAdcreativeSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_creative_revised_adcreative_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'revisedAdcreativeElements' => '\TencentAds\Model\AdCreativeRevisedAdcreativeElements',
        'revisedPageSpec' => '\TencentAds\Model\AdCreativeRevisedPageSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'revisedAdcreativeElements' => null,
        'revisedPageSpec' => null
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
        'revisedAdcreativeElements' => 'revised_adcreative_elements',
        'revisedPageSpec' => 'revised_page_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'revisedAdcreativeElements' => 'setRevisedAdcreativeElements',
        'revisedPageSpec' => 'setRevisedPageSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'revisedAdcreativeElements' => 'getRevisedAdcreativeElements',
        'revisedPageSpec' => 'getRevisedPageSpec'
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
        $this->container['revisedAdcreativeElements'] = isset($data['revisedAdcreativeElements']) ? $data['revisedAdcreativeElements'] : null;
        $this->container['revisedPageSpec'] = isset($data['revisedPageSpec']) ? $data['revisedPageSpec'] : null;
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
     * Gets revisedAdcreativeElements
     *
     * @return \TencentAds\Model\AdCreativeRevisedAdcreativeElements
     */
    public function getRevisedAdcreativeElements()
    {
        return $this->container['revisedAdcreativeElements'];
    }

    /**
     * Sets revisedAdcreativeElements
     *
     * @param \TencentAds\Model\AdCreativeRevisedAdcreativeElements $revisedAdcreativeElements revisedAdcreativeElements
     *
     * @return $this
     */
    public function setRevisedAdcreativeElements($revisedAdcreativeElements)
    {
        $this->container['revisedAdcreativeElements'] = $revisedAdcreativeElements;

        return $this;
    }

    /**
     * Gets revisedPageSpec
     *
     * @return \TencentAds\Model\AdCreativeRevisedPageSpec
     */
    public function getRevisedPageSpec()
    {
        return $this->container['revisedPageSpec'];
    }

    /**
     * Sets revisedPageSpec
     *
     * @param \TencentAds\Model\AdCreativeRevisedPageSpec $revisedPageSpec revisedPageSpec
     *
     * @return $this
     */
    public function setRevisedPageSpec($revisedPageSpec)
    {
        $this->container['revisedPageSpec'] = $revisedPageSpec;

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

