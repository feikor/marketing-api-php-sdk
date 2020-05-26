<?php
/**
 * AdAdcreative
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
 * AdAdcreative Class Doc Comment
 *
 * @category Class
 * @description 广告创意
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdAdcreative implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_adcreative';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adcreativeId' => 'int',
        'adcreativeName' => 'string',
        'campaignId' => 'int',
        'adcreativeTemplateId' => 'int',
        'adcreativeElements' => '\TencentAds\Model\AdCreativeAdcreativeCreativeElementsRead',
        'pageType' => '\TencentAds\Model\AdCreativePageTypeRead',
        'pageSpec' => '\TencentAds\Model\AdCreativePageSpec',
        'siteSet' => 'string[]',
        'promotedObjectType' => '\TencentAds\Model\AdCreativePromotedObjectType',
        'promotedObjectId' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'creativeExtSpec' => '\TencentAds\Model\AdCreativeCreativeExtSpec',
        'contractCreativeTemplateId' => 'int',
        'prepareData' => '\TencentAds\Model\AdCreativeAdcreativePrepareData',
        'enableContinousPlayback' => 'bool',
        'playablePageMaterialId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adcreativeId' => 'int64',
        'adcreativeName' => null,
        'campaignId' => 'int64',
        'adcreativeTemplateId' => 'int64',
        'adcreativeElements' => null,
        'pageType' => null,
        'pageSpec' => null,
        'siteSet' => null,
        'promotedObjectType' => null,
        'promotedObjectId' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'creativeExtSpec' => null,
        'contractCreativeTemplateId' => 'int64',
        'prepareData' => null,
        'enableContinousPlayback' => null,
        'playablePageMaterialId' => null
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
        'adcreativeId' => 'adcreative_id',
        'adcreativeName' => 'adcreative_name',
        'campaignId' => 'campaign_id',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeElements' => 'adcreative_elements',
        'pageType' => 'page_type',
        'pageSpec' => 'page_spec',
        'siteSet' => 'site_set',
        'promotedObjectType' => 'promoted_object_type',
        'promotedObjectId' => 'promoted_object_id',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'creativeExtSpec' => 'creative_ext_spec',
        'contractCreativeTemplateId' => 'contract_creative_template_id',
        'prepareData' => 'prepare_data',
        'enableContinousPlayback' => 'enable_continous_playback',
        'playablePageMaterialId' => 'playable_page_material_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adcreativeId' => 'setAdcreativeId',
        'adcreativeName' => 'setAdcreativeName',
        'campaignId' => 'setCampaignId',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeElements' => 'setAdcreativeElements',
        'pageType' => 'setPageType',
        'pageSpec' => 'setPageSpec',
        'siteSet' => 'setSiteSet',
        'promotedObjectType' => 'setPromotedObjectType',
        'promotedObjectId' => 'setPromotedObjectId',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'creativeExtSpec' => 'setCreativeExtSpec',
        'contractCreativeTemplateId' => 'setContractCreativeTemplateId',
        'prepareData' => 'setPrepareData',
        'enableContinousPlayback' => 'setEnableContinousPlayback',
        'playablePageMaterialId' => 'setPlayablePageMaterialId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adcreativeId' => 'getAdcreativeId',
        'adcreativeName' => 'getAdcreativeName',
        'campaignId' => 'getCampaignId',
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'adcreativeElements' => 'getAdcreativeElements',
        'pageType' => 'getPageType',
        'pageSpec' => 'getPageSpec',
        'siteSet' => 'getSiteSet',
        'promotedObjectType' => 'getPromotedObjectType',
        'promotedObjectId' => 'getPromotedObjectId',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'creativeExtSpec' => 'getCreativeExtSpec',
        'contractCreativeTemplateId' => 'getContractCreativeTemplateId',
        'prepareData' => 'getPrepareData',
        'enableContinousPlayback' => 'getEnableContinousPlayback',
        'playablePageMaterialId' => 'getPlayablePageMaterialId'
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
        $this->container['adcreativeId'] = isset($data['adcreativeId']) ? $data['adcreativeId'] : null;
        $this->container['adcreativeName'] = isset($data['adcreativeName']) ? $data['adcreativeName'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['creativeExtSpec'] = isset($data['creativeExtSpec']) ? $data['creativeExtSpec'] : null;
        $this->container['contractCreativeTemplateId'] = isset($data['contractCreativeTemplateId']) ? $data['contractCreativeTemplateId'] : null;
        $this->container['prepareData'] = isset($data['prepareData']) ? $data['prepareData'] : null;
        $this->container['enableContinousPlayback'] = isset($data['enableContinousPlayback']) ? $data['enableContinousPlayback'] : null;
        $this->container['playablePageMaterialId'] = isset($data['playablePageMaterialId']) ? $data['playablePageMaterialId'] : null;
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
     * Gets adcreativeId
     *
     * @return int
     */
    public function getAdcreativeId()
    {
        return $this->container['adcreativeId'];
    }

    /**
     * Sets adcreativeId
     *
     * @param int $adcreativeId adcreativeId
     *
     * @return $this
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->container['adcreativeId'] = $adcreativeId;

        return $this;
    }

    /**
     * Gets adcreativeName
     *
     * @return string
     */
    public function getAdcreativeName()
    {
        return $this->container['adcreativeName'];
    }

    /**
     * Sets adcreativeName
     *
     * @param string $adcreativeName adcreativeName
     *
     * @return $this
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->container['adcreativeName'] = $adcreativeName;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets adcreativeTemplateId
     *
     * @return int
     */
    public function getAdcreativeTemplateId()
    {
        return $this->container['adcreativeTemplateId'];
    }

    /**
     * Sets adcreativeTemplateId
     *
     * @param int $adcreativeTemplateId adcreativeTemplateId
     *
     * @return $this
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->container['adcreativeTemplateId'] = $adcreativeTemplateId;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdCreativeAdcreativeCreativeElementsRead
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdCreativeAdcreativeCreativeElementsRead $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\AdCreativePageTypeRead
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\AdCreativePageTypeRead $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\AdCreativePageSpec
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\AdCreativePageSpec $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return string[]
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param string[] $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\AdCreativePromotedObjectType
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\AdCreativePromotedObjectType $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets creativeExtSpec
     *
     * @return \TencentAds\Model\AdCreativeCreativeExtSpec
     */
    public function getCreativeExtSpec()
    {
        return $this->container['creativeExtSpec'];
    }

    /**
     * Sets creativeExtSpec
     *
     * @param \TencentAds\Model\AdCreativeCreativeExtSpec $creativeExtSpec creativeExtSpec
     *
     * @return $this
     */
    public function setCreativeExtSpec($creativeExtSpec)
    {
        $this->container['creativeExtSpec'] = $creativeExtSpec;

        return $this;
    }

    /**
     * Gets contractCreativeTemplateId
     *
     * @return int
     */
    public function getContractCreativeTemplateId()
    {
        return $this->container['contractCreativeTemplateId'];
    }

    /**
     * Sets contractCreativeTemplateId
     *
     * @param int $contractCreativeTemplateId contractCreativeTemplateId
     *
     * @return $this
     */
    public function setContractCreativeTemplateId($contractCreativeTemplateId)
    {
        $this->container['contractCreativeTemplateId'] = $contractCreativeTemplateId;

        return $this;
    }

    /**
     * Gets prepareData
     *
     * @return \TencentAds\Model\AdCreativeAdcreativePrepareData
     */
    public function getPrepareData()
    {
        return $this->container['prepareData'];
    }

    /**
     * Sets prepareData
     *
     * @param \TencentAds\Model\AdCreativeAdcreativePrepareData $prepareData prepareData
     *
     * @return $this
     */
    public function setPrepareData($prepareData)
    {
        $this->container['prepareData'] = $prepareData;

        return $this;
    }

    /**
     * Gets enableContinousPlayback
     *
     * @return bool
     */
    public function getEnableContinousPlayback()
    {
        return $this->container['enableContinousPlayback'];
    }

    /**
     * Sets enableContinousPlayback
     *
     * @param bool $enableContinousPlayback enableContinousPlayback
     *
     * @return $this
     */
    public function setEnableContinousPlayback($enableContinousPlayback)
    {
        $this->container['enableContinousPlayback'] = $enableContinousPlayback;

        return $this;
    }

    /**
     * Gets playablePageMaterialId
     *
     * @return string
     */
    public function getPlayablePageMaterialId()
    {
        return $this->container['playablePageMaterialId'];
    }

    /**
     * Sets playablePageMaterialId
     *
     * @param string $playablePageMaterialId playablePageMaterialId
     *
     * @return $this
     */
    public function setPlayablePageMaterialId($playablePageMaterialId)
    {
        $this->container['playablePageMaterialId'] = $playablePageMaterialId;

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

