<?php
/**
 * AdgroupSceneTargetingForWrite
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
 * AdgroupSceneTargetingForWrite Class Doc Comment
 *
 * @category Class
 * @description 场景定向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupSceneTargetingForWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'adgroup_scene_targeting_for_write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobileUnion' => 'string[]',
        'excludeMobileUnion' => 'string[]',
        'unionPositionPackage' => 'int[]',
        'excludeUnionPositionPackage' => 'int[]',
        'tencentNews' => 'string[]',
        'displayScene' => 'string[]',
        'capScene' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobileUnion' => null,
        'excludeMobileUnion' => null,
        'unionPositionPackage' => 'int64',
        'excludeUnionPositionPackage' => 'int64',
        'tencentNews' => null,
        'displayScene' => null,
        'capScene' => null
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
        'mobileUnion' => 'mobile_union',
        'excludeMobileUnion' => 'exclude_mobile_union',
        'unionPositionPackage' => 'union_position_package',
        'excludeUnionPositionPackage' => 'exclude_union_position_package',
        'tencentNews' => 'tencent_news',
        'displayScene' => 'display_scene',
        'capScene' => 'cap_scene'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobileUnion' => 'setMobileUnion',
        'excludeMobileUnion' => 'setExcludeMobileUnion',
        'unionPositionPackage' => 'setUnionPositionPackage',
        'excludeUnionPositionPackage' => 'setExcludeUnionPositionPackage',
        'tencentNews' => 'setTencentNews',
        'displayScene' => 'setDisplayScene',
        'capScene' => 'setCapScene'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobileUnion' => 'getMobileUnion',
        'excludeMobileUnion' => 'getExcludeMobileUnion',
        'unionPositionPackage' => 'getUnionPositionPackage',
        'excludeUnionPositionPackage' => 'getExcludeUnionPositionPackage',
        'tencentNews' => 'getTencentNews',
        'displayScene' => 'getDisplayScene',
        'capScene' => 'getCapScene'
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
        $this->container['mobileUnion'] = isset($data['mobileUnion']) ? $data['mobileUnion'] : null;
        $this->container['excludeMobileUnion'] = isset($data['excludeMobileUnion']) ? $data['excludeMobileUnion'] : null;
        $this->container['unionPositionPackage'] = isset($data['unionPositionPackage']) ? $data['unionPositionPackage'] : null;
        $this->container['excludeUnionPositionPackage'] = isset($data['excludeUnionPositionPackage']) ? $data['excludeUnionPositionPackage'] : null;
        $this->container['tencentNews'] = isset($data['tencentNews']) ? $data['tencentNews'] : null;
        $this->container['displayScene'] = isset($data['displayScene']) ? $data['displayScene'] : null;
        $this->container['capScene'] = isset($data['capScene']) ? $data['capScene'] : null;
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
     * Gets mobileUnion
     *
     * @return string[]
     */
    public function getMobileUnion()
    {
        return $this->container['mobileUnion'];
    }

    /**
     * Sets mobileUnion
     *
     * @param string[] $mobileUnion mobileUnion
     *
     * @return $this
     */
    public function setMobileUnion($mobileUnion)
    {
        $this->container['mobileUnion'] = $mobileUnion;

        return $this;
    }

    /**
     * Gets excludeMobileUnion
     *
     * @return string[]
     */
    public function getExcludeMobileUnion()
    {
        return $this->container['excludeMobileUnion'];
    }

    /**
     * Sets excludeMobileUnion
     *
     * @param string[] $excludeMobileUnion excludeMobileUnion
     *
     * @return $this
     */
    public function setExcludeMobileUnion($excludeMobileUnion)
    {
        $this->container['excludeMobileUnion'] = $excludeMobileUnion;

        return $this;
    }

    /**
     * Gets unionPositionPackage
     *
     * @return int[]
     */
    public function getUnionPositionPackage()
    {
        return $this->container['unionPositionPackage'];
    }

    /**
     * Sets unionPositionPackage
     *
     * @param int[] $unionPositionPackage unionPositionPackage
     *
     * @return $this
     */
    public function setUnionPositionPackage($unionPositionPackage)
    {
        $this->container['unionPositionPackage'] = $unionPositionPackage;

        return $this;
    }

    /**
     * Gets excludeUnionPositionPackage
     *
     * @return int[]
     */
    public function getExcludeUnionPositionPackage()
    {
        return $this->container['excludeUnionPositionPackage'];
    }

    /**
     * Sets excludeUnionPositionPackage
     *
     * @param int[] $excludeUnionPositionPackage excludeUnionPositionPackage
     *
     * @return $this
     */
    public function setExcludeUnionPositionPackage($excludeUnionPositionPackage)
    {
        $this->container['excludeUnionPositionPackage'] = $excludeUnionPositionPackage;

        return $this;
    }

    /**
     * Gets tencentNews
     *
     * @return string[]
     */
    public function getTencentNews()
    {
        return $this->container['tencentNews'];
    }

    /**
     * Sets tencentNews
     *
     * @param string[] $tencentNews tencentNews
     *
     * @return $this
     */
    public function setTencentNews($tencentNews)
    {
        $this->container['tencentNews'] = $tencentNews;

        return $this;
    }

    /**
     * Gets displayScene
     *
     * @return string[]
     */
    public function getDisplayScene()
    {
        return $this->container['displayScene'];
    }

    /**
     * Sets displayScene
     *
     * @param string[] $displayScene displayScene
     *
     * @return $this
     */
    public function setDisplayScene($displayScene)
    {
        $this->container['displayScene'] = $displayScene;

        return $this;
    }

    /**
     * Gets capScene
     *
     * @return string[]
     */
    public function getCapScene()
    {
        return $this->container['capScene'];
    }

    /**
     * Sets capScene
     *
     * @param string[] $capScene capScene
     *
     * @return $this
     */
    public function setCapScene($capScene)
    {
        $this->container['capScene'] = $capScene;

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

