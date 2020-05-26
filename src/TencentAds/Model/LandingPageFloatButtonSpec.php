<?php
/**
 * LandingPageFloatButtonSpec
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
 * LandingPageFloatButtonSpec Class Doc Comment
 *
 * @category Class
 * @description 悬浮组件按钮
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageFloatButtonSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'landing_page_float_button_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linkSpec' => '\TencentAds\Model\LandingPageLinkSpec',
        'appDownloadSpec' => '\TencentAds\Model\LandingPageAppDownloadSpec',
        'miniProgramSpec' => '\TencentAds\Model\LandingPageMiniProgramSpec',
        'miniGameProgramSpec' => '\TencentAds\Model\LandingPageMiniGameProgramSpec',
        'fengyeSpec' => '\TencentAds\Model\LandingPageFengyeSpec',
        'cardSpec' => '\TencentAds\Model\LandingPageCardSpec',
        'followSpec' => '\TencentAds\Model\LandingPageFollowSpec',
        'serviceSpec' => '\TencentAds\Model\LandingPageServiceSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linkSpec' => null,
        'appDownloadSpec' => null,
        'miniProgramSpec' => null,
        'miniGameProgramSpec' => null,
        'fengyeSpec' => null,
        'cardSpec' => null,
        'followSpec' => null,
        'serviceSpec' => null
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
        'linkSpec' => 'link_spec',
        'appDownloadSpec' => 'app_download_spec',
        'miniProgramSpec' => 'mini_program_spec',
        'miniGameProgramSpec' => 'mini_game_program_spec',
        'fengyeSpec' => 'fengye_spec',
        'cardSpec' => 'card_spec',
        'followSpec' => 'follow_spec',
        'serviceSpec' => 'service_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linkSpec' => 'setLinkSpec',
        'appDownloadSpec' => 'setAppDownloadSpec',
        'miniProgramSpec' => 'setMiniProgramSpec',
        'miniGameProgramSpec' => 'setMiniGameProgramSpec',
        'fengyeSpec' => 'setFengyeSpec',
        'cardSpec' => 'setCardSpec',
        'followSpec' => 'setFollowSpec',
        'serviceSpec' => 'setServiceSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linkSpec' => 'getLinkSpec',
        'appDownloadSpec' => 'getAppDownloadSpec',
        'miniProgramSpec' => 'getMiniProgramSpec',
        'miniGameProgramSpec' => 'getMiniGameProgramSpec',
        'fengyeSpec' => 'getFengyeSpec',
        'cardSpec' => 'getCardSpec',
        'followSpec' => 'getFollowSpec',
        'serviceSpec' => 'getServiceSpec'
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
        $this->container['linkSpec'] = isset($data['linkSpec']) ? $data['linkSpec'] : null;
        $this->container['appDownloadSpec'] = isset($data['appDownloadSpec']) ? $data['appDownloadSpec'] : null;
        $this->container['miniProgramSpec'] = isset($data['miniProgramSpec']) ? $data['miniProgramSpec'] : null;
        $this->container['miniGameProgramSpec'] = isset($data['miniGameProgramSpec']) ? $data['miniGameProgramSpec'] : null;
        $this->container['fengyeSpec'] = isset($data['fengyeSpec']) ? $data['fengyeSpec'] : null;
        $this->container['cardSpec'] = isset($data['cardSpec']) ? $data['cardSpec'] : null;
        $this->container['followSpec'] = isset($data['followSpec']) ? $data['followSpec'] : null;
        $this->container['serviceSpec'] = isset($data['serviceSpec']) ? $data['serviceSpec'] : null;
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
     * Gets linkSpec
     *
     * @return \TencentAds\Model\LandingPageLinkSpec
     */
    public function getLinkSpec()
    {
        return $this->container['linkSpec'];
    }

    /**
     * Sets linkSpec
     *
     * @param \TencentAds\Model\LandingPageLinkSpec $linkSpec linkSpec
     *
     * @return $this
     */
    public function setLinkSpec($linkSpec)
    {
        $this->container['linkSpec'] = $linkSpec;

        return $this;
    }

    /**
     * Gets appDownloadSpec
     *
     * @return \TencentAds\Model\LandingPageAppDownloadSpec
     */
    public function getAppDownloadSpec()
    {
        return $this->container['appDownloadSpec'];
    }

    /**
     * Sets appDownloadSpec
     *
     * @param \TencentAds\Model\LandingPageAppDownloadSpec $appDownloadSpec appDownloadSpec
     *
     * @return $this
     */
    public function setAppDownloadSpec($appDownloadSpec)
    {
        $this->container['appDownloadSpec'] = $appDownloadSpec;

        return $this;
    }

    /**
     * Gets miniProgramSpec
     *
     * @return \TencentAds\Model\LandingPageMiniProgramSpec
     */
    public function getMiniProgramSpec()
    {
        return $this->container['miniProgramSpec'];
    }

    /**
     * Sets miniProgramSpec
     *
     * @param \TencentAds\Model\LandingPageMiniProgramSpec $miniProgramSpec miniProgramSpec
     *
     * @return $this
     */
    public function setMiniProgramSpec($miniProgramSpec)
    {
        $this->container['miniProgramSpec'] = $miniProgramSpec;

        return $this;
    }

    /**
     * Gets miniGameProgramSpec
     *
     * @return \TencentAds\Model\LandingPageMiniGameProgramSpec
     */
    public function getMiniGameProgramSpec()
    {
        return $this->container['miniGameProgramSpec'];
    }

    /**
     * Sets miniGameProgramSpec
     *
     * @param \TencentAds\Model\LandingPageMiniGameProgramSpec $miniGameProgramSpec miniGameProgramSpec
     *
     * @return $this
     */
    public function setMiniGameProgramSpec($miniGameProgramSpec)
    {
        $this->container['miniGameProgramSpec'] = $miniGameProgramSpec;

        return $this;
    }

    /**
     * Gets fengyeSpec
     *
     * @return \TencentAds\Model\LandingPageFengyeSpec
     */
    public function getFengyeSpec()
    {
        return $this->container['fengyeSpec'];
    }

    /**
     * Sets fengyeSpec
     *
     * @param \TencentAds\Model\LandingPageFengyeSpec $fengyeSpec fengyeSpec
     *
     * @return $this
     */
    public function setFengyeSpec($fengyeSpec)
    {
        $this->container['fengyeSpec'] = $fengyeSpec;

        return $this;
    }

    /**
     * Gets cardSpec
     *
     * @return \TencentAds\Model\LandingPageCardSpec
     */
    public function getCardSpec()
    {
        return $this->container['cardSpec'];
    }

    /**
     * Sets cardSpec
     *
     * @param \TencentAds\Model\LandingPageCardSpec $cardSpec cardSpec
     *
     * @return $this
     */
    public function setCardSpec($cardSpec)
    {
        $this->container['cardSpec'] = $cardSpec;

        return $this;
    }

    /**
     * Gets followSpec
     *
     * @return \TencentAds\Model\LandingPageFollowSpec
     */
    public function getFollowSpec()
    {
        return $this->container['followSpec'];
    }

    /**
     * Sets followSpec
     *
     * @param \TencentAds\Model\LandingPageFollowSpec $followSpec followSpec
     *
     * @return $this
     */
    public function setFollowSpec($followSpec)
    {
        $this->container['followSpec'] = $followSpec;

        return $this;
    }

    /**
     * Gets serviceSpec
     *
     * @return \TencentAds\Model\LandingPageServiceSpec
     */
    public function getServiceSpec()
    {
        return $this->container['serviceSpec'];
    }

    /**
     * Sets serviceSpec
     *
     * @param \TencentAds\Model\LandingPageServiceSpec $serviceSpec serviceSpec
     *
     * @return $this
     */
    public function setServiceSpec($serviceSpec)
    {
        $this->container['serviceSpec'] = $serviceSpec;

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

