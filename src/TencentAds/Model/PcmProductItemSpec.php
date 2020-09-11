<?php
/**
 * PcmProductItemSpec
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
 * PcmProductItemSpec Class Doc Comment
 *
 * @category Class
 * @description 商品信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PcmProductItemSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'pcm_product_item_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productCatalogId' => 'int',
        'accountId' => 'int',
        'productOuterId' => 'string',
        'productName' => 'string',
        'description' => 'string',
        'customData' => 'string',
        'author' => 'string',
        'imageUrl' => 'string',
        'price' => 'int',
        'targetUrlMobile' => 'string',
        'productHashId' => 'int',
        'rejectMessage' => 'string',
        'systemStatus' => '\TencentAds\Model\AuditStatus',
        'lastModifiedTime' => 'string',
        'additionalImageUrl' => 'string[]',
        'productSaleStatus' => '\TencentAds\Model\AuditStatus',
        'firstCategoryId' => 'int',
        'secondCategoryId' => 'int',
        'thirdCategoryId' => 'int',
        'fourthCategoryId' => 'int',
        'firstCategoryName' => 'string',
        'secondCategoryName' => 'string',
        'thirdCategoryName' => 'string',
        'fourthCategoryName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productCatalogId' => 'int64',
        'accountId' => 'int64',
        'productOuterId' => null,
        'productName' => null,
        'description' => null,
        'customData' => null,
        'author' => null,
        'imageUrl' => null,
        'price' => 'int64',
        'targetUrlMobile' => null,
        'productHashId' => 'int64',
        'rejectMessage' => null,
        'systemStatus' => null,
        'lastModifiedTime' => null,
        'additionalImageUrl' => null,
        'productSaleStatus' => null,
        'firstCategoryId' => 'int64',
        'secondCategoryId' => 'int64',
        'thirdCategoryId' => 'int64',
        'fourthCategoryId' => 'int64',
        'firstCategoryName' => null,
        'secondCategoryName' => null,
        'thirdCategoryName' => null,
        'fourthCategoryName' => null
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
        'productCatalogId' => 'product_catalog_id',
        'accountId' => 'account_id',
        'productOuterId' => 'product_outer_id',
        'productName' => 'product_name',
        'description' => 'description',
        'customData' => 'custom_data',
        'author' => 'author',
        'imageUrl' => 'image_url',
        'price' => 'price',
        'targetUrlMobile' => 'target_url_mobile',
        'productHashId' => 'product_hash_id',
        'rejectMessage' => 'reject_message',
        'systemStatus' => 'system_status',
        'lastModifiedTime' => 'last_modified_time',
        'additionalImageUrl' => 'additional_image_url',
        'productSaleStatus' => 'product_sale_status',
        'firstCategoryId' => 'first_category_id',
        'secondCategoryId' => 'second_category_id',
        'thirdCategoryId' => 'third_category_id',
        'fourthCategoryId' => 'fourth_category_id',
        'firstCategoryName' => 'first_category_name',
        'secondCategoryName' => 'second_category_name',
        'thirdCategoryName' => 'third_category_name',
        'fourthCategoryName' => 'fourth_category_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productCatalogId' => 'setProductCatalogId',
        'accountId' => 'setAccountId',
        'productOuterId' => 'setProductOuterId',
        'productName' => 'setProductName',
        'description' => 'setDescription',
        'customData' => 'setCustomData',
        'author' => 'setAuthor',
        'imageUrl' => 'setImageUrl',
        'price' => 'setPrice',
        'targetUrlMobile' => 'setTargetUrlMobile',
        'productHashId' => 'setProductHashId',
        'rejectMessage' => 'setRejectMessage',
        'systemStatus' => 'setSystemStatus',
        'lastModifiedTime' => 'setLastModifiedTime',
        'additionalImageUrl' => 'setAdditionalImageUrl',
        'productSaleStatus' => 'setProductSaleStatus',
        'firstCategoryId' => 'setFirstCategoryId',
        'secondCategoryId' => 'setSecondCategoryId',
        'thirdCategoryId' => 'setThirdCategoryId',
        'fourthCategoryId' => 'setFourthCategoryId',
        'firstCategoryName' => 'setFirstCategoryName',
        'secondCategoryName' => 'setSecondCategoryName',
        'thirdCategoryName' => 'setThirdCategoryName',
        'fourthCategoryName' => 'setFourthCategoryName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productCatalogId' => 'getProductCatalogId',
        'accountId' => 'getAccountId',
        'productOuterId' => 'getProductOuterId',
        'productName' => 'getProductName',
        'description' => 'getDescription',
        'customData' => 'getCustomData',
        'author' => 'getAuthor',
        'imageUrl' => 'getImageUrl',
        'price' => 'getPrice',
        'targetUrlMobile' => 'getTargetUrlMobile',
        'productHashId' => 'getProductHashId',
        'rejectMessage' => 'getRejectMessage',
        'systemStatus' => 'getSystemStatus',
        'lastModifiedTime' => 'getLastModifiedTime',
        'additionalImageUrl' => 'getAdditionalImageUrl',
        'productSaleStatus' => 'getProductSaleStatus',
        'firstCategoryId' => 'getFirstCategoryId',
        'secondCategoryId' => 'getSecondCategoryId',
        'thirdCategoryId' => 'getThirdCategoryId',
        'fourthCategoryId' => 'getFourthCategoryId',
        'firstCategoryName' => 'getFirstCategoryName',
        'secondCategoryName' => 'getSecondCategoryName',
        'thirdCategoryName' => 'getThirdCategoryName',
        'fourthCategoryName' => 'getFourthCategoryName'
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
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['productOuterId'] = isset($data['productOuterId']) ? $data['productOuterId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customData'] = isset($data['customData']) ? $data['customData'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['targetUrlMobile'] = isset($data['targetUrlMobile']) ? $data['targetUrlMobile'] : null;
        $this->container['productHashId'] = isset($data['productHashId']) ? $data['productHashId'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['additionalImageUrl'] = isset($data['additionalImageUrl']) ? $data['additionalImageUrl'] : null;
        $this->container['productSaleStatus'] = isset($data['productSaleStatus']) ? $data['productSaleStatus'] : null;
        $this->container['firstCategoryId'] = isset($data['firstCategoryId']) ? $data['firstCategoryId'] : null;
        $this->container['secondCategoryId'] = isset($data['secondCategoryId']) ? $data['secondCategoryId'] : null;
        $this->container['thirdCategoryId'] = isset($data['thirdCategoryId']) ? $data['thirdCategoryId'] : null;
        $this->container['fourthCategoryId'] = isset($data['fourthCategoryId']) ? $data['fourthCategoryId'] : null;
        $this->container['firstCategoryName'] = isset($data['firstCategoryName']) ? $data['firstCategoryName'] : null;
        $this->container['secondCategoryName'] = isset($data['secondCategoryName']) ? $data['secondCategoryName'] : null;
        $this->container['thirdCategoryName'] = isset($data['thirdCategoryName']) ? $data['thirdCategoryName'] : null;
        $this->container['fourthCategoryName'] = isset($data['fourthCategoryName']) ? $data['fourthCategoryName'] : null;
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
     * Gets productCatalogId
     *
     * @return int
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param int $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets productOuterId
     *
     * @return string
     */
    public function getProductOuterId()
    {
        return $this->container['productOuterId'];
    }

    /**
     * Sets productOuterId
     *
     * @param string $productOuterId productOuterId
     *
     * @return $this
     */
    public function setProductOuterId($productOuterId)
    {
        $this->container['productOuterId'] = $productOuterId;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets customData
     *
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['customData'];
    }

    /**
     * Sets customData
     *
     * @param string $customData customData
     *
     * @return $this
     */
    public function setCustomData($customData)
    {
        $this->container['customData'] = $customData;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string $imageUrl imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets targetUrlMobile
     *
     * @return string
     */
    public function getTargetUrlMobile()
    {
        return $this->container['targetUrlMobile'];
    }

    /**
     * Sets targetUrlMobile
     *
     * @param string $targetUrlMobile targetUrlMobile
     *
     * @return $this
     */
    public function setTargetUrlMobile($targetUrlMobile)
    {
        $this->container['targetUrlMobile'] = $targetUrlMobile;

        return $this;
    }

    /**
     * Gets productHashId
     *
     * @return int
     */
    public function getProductHashId()
    {
        return $this->container['productHashId'];
    }

    /**
     * Sets productHashId
     *
     * @param int $productHashId productHashId
     *
     * @return $this
     */
    public function setProductHashId($productHashId)
    {
        $this->container['productHashId'] = $productHashId;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\AuditStatus
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\AuditStatus $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return string
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param string $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets additionalImageUrl
     *
     * @return string[]
     */
    public function getAdditionalImageUrl()
    {
        return $this->container['additionalImageUrl'];
    }

    /**
     * Sets additionalImageUrl
     *
     * @param string[] $additionalImageUrl additionalImageUrl
     *
     * @return $this
     */
    public function setAdditionalImageUrl($additionalImageUrl)
    {
        $this->container['additionalImageUrl'] = $additionalImageUrl;

        return $this;
    }

    /**
     * Gets productSaleStatus
     *
     * @return \TencentAds\Model\AuditStatus
     */
    public function getProductSaleStatus()
    {
        return $this->container['productSaleStatus'];
    }

    /**
     * Sets productSaleStatus
     *
     * @param \TencentAds\Model\AuditStatus $productSaleStatus productSaleStatus
     *
     * @return $this
     */
    public function setProductSaleStatus($productSaleStatus)
    {
        $this->container['productSaleStatus'] = $productSaleStatus;

        return $this;
    }

    /**
     * Gets firstCategoryId
     *
     * @return int
     */
    public function getFirstCategoryId()
    {
        return $this->container['firstCategoryId'];
    }

    /**
     * Sets firstCategoryId
     *
     * @param int $firstCategoryId firstCategoryId
     *
     * @return $this
     */
    public function setFirstCategoryId($firstCategoryId)
    {
        $this->container['firstCategoryId'] = $firstCategoryId;

        return $this;
    }

    /**
     * Gets secondCategoryId
     *
     * @return int
     */
    public function getSecondCategoryId()
    {
        return $this->container['secondCategoryId'];
    }

    /**
     * Sets secondCategoryId
     *
     * @param int $secondCategoryId secondCategoryId
     *
     * @return $this
     */
    public function setSecondCategoryId($secondCategoryId)
    {
        $this->container['secondCategoryId'] = $secondCategoryId;

        return $this;
    }

    /**
     * Gets thirdCategoryId
     *
     * @return int
     */
    public function getThirdCategoryId()
    {
        return $this->container['thirdCategoryId'];
    }

    /**
     * Sets thirdCategoryId
     *
     * @param int $thirdCategoryId thirdCategoryId
     *
     * @return $this
     */
    public function setThirdCategoryId($thirdCategoryId)
    {
        $this->container['thirdCategoryId'] = $thirdCategoryId;

        return $this;
    }

    /**
     * Gets fourthCategoryId
     *
     * @return int
     */
    public function getFourthCategoryId()
    {
        return $this->container['fourthCategoryId'];
    }

    /**
     * Sets fourthCategoryId
     *
     * @param int $fourthCategoryId fourthCategoryId
     *
     * @return $this
     */
    public function setFourthCategoryId($fourthCategoryId)
    {
        $this->container['fourthCategoryId'] = $fourthCategoryId;

        return $this;
    }

    /**
     * Gets firstCategoryName
     *
     * @return string
     */
    public function getFirstCategoryName()
    {
        return $this->container['firstCategoryName'];
    }

    /**
     * Sets firstCategoryName
     *
     * @param string $firstCategoryName firstCategoryName
     *
     * @return $this
     */
    public function setFirstCategoryName($firstCategoryName)
    {
        $this->container['firstCategoryName'] = $firstCategoryName;

        return $this;
    }

    /**
     * Gets secondCategoryName
     *
     * @return string
     */
    public function getSecondCategoryName()
    {
        return $this->container['secondCategoryName'];
    }

    /**
     * Sets secondCategoryName
     *
     * @param string $secondCategoryName secondCategoryName
     *
     * @return $this
     */
    public function setSecondCategoryName($secondCategoryName)
    {
        $this->container['secondCategoryName'] = $secondCategoryName;

        return $this;
    }

    /**
     * Gets thirdCategoryName
     *
     * @return string
     */
    public function getThirdCategoryName()
    {
        return $this->container['thirdCategoryName'];
    }

    /**
     * Sets thirdCategoryName
     *
     * @param string $thirdCategoryName thirdCategoryName
     *
     * @return $this
     */
    public function setThirdCategoryName($thirdCategoryName)
    {
        $this->container['thirdCategoryName'] = $thirdCategoryName;

        return $this;
    }

    /**
     * Gets fourthCategoryName
     *
     * @return string
     */
    public function getFourthCategoryName()
    {
        return $this->container['fourthCategoryName'];
    }

    /**
     * Sets fourthCategoryName
     *
     * @param string $fourthCategoryName fourthCategoryName
     *
     * @return $this
     */
    public function setFourthCategoryName($fourthCategoryName)
    {
        $this->container['fourthCategoryName'] = $fourthCategoryName;

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

