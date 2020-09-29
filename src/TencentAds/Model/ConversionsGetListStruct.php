<?php
/**
 * ConversionsGetListStruct
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
 * ConversionsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversionsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversionId' => 'int',
        'conversionName' => 'string',
        'accessType' => '\TencentAds\Model\AccessType',
        'claimType' => '\TencentAds\Model\ClaimType',
        'feedbackUrl' => 'string',
        'selfAttributed' => 'bool',
        'optimizationGoal' => '\TencentAds\Model\IntOptimizationGoal',
        'deepBehaviorOptimizationGoal' => '\TencentAds\Model\IntOptimizationGoal',
        'deepWorthOptimizationGoal' => '\TencentAds\Model\ConversionOptimizationGoal',
        'userActionSetId' => 'int',
        'userActionSetKey' => 'string',
        'siteSetEnable' => 'bool',
        'isDeleted' => 'bool',
        'accessStatus' => '\TencentAds\Model\AccessStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversionId' => 'int64',
        'conversionName' => null,
        'accessType' => null,
        'claimType' => null,
        'feedbackUrl' => null,
        'selfAttributed' => null,
        'optimizationGoal' => null,
        'deepBehaviorOptimizationGoal' => null,
        'deepWorthOptimizationGoal' => null,
        'userActionSetId' => 'int64',
        'userActionSetKey' => null,
        'siteSetEnable' => null,
        'isDeleted' => null,
        'accessStatus' => null
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
        'conversionId' => 'conversion_id',
        'conversionName' => 'conversion_name',
        'accessType' => 'access_type',
        'claimType' => 'claim_type',
        'feedbackUrl' => 'feedback_url',
        'selfAttributed' => 'self_attributed',
        'optimizationGoal' => 'optimization_goal',
        'deepBehaviorOptimizationGoal' => 'deep_behavior_optimization_goal',
        'deepWorthOptimizationGoal' => 'deep_worth_optimization_goal',
        'userActionSetId' => 'user_action_set_id',
        'userActionSetKey' => 'user_action_set_key',
        'siteSetEnable' => 'site_set_enable',
        'isDeleted' => 'is_deleted',
        'accessStatus' => 'access_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversionId' => 'setConversionId',
        'conversionName' => 'setConversionName',
        'accessType' => 'setAccessType',
        'claimType' => 'setClaimType',
        'feedbackUrl' => 'setFeedbackUrl',
        'selfAttributed' => 'setSelfAttributed',
        'optimizationGoal' => 'setOptimizationGoal',
        'deepBehaviorOptimizationGoal' => 'setDeepBehaviorOptimizationGoal',
        'deepWorthOptimizationGoal' => 'setDeepWorthOptimizationGoal',
        'userActionSetId' => 'setUserActionSetId',
        'userActionSetKey' => 'setUserActionSetKey',
        'siteSetEnable' => 'setSiteSetEnable',
        'isDeleted' => 'setIsDeleted',
        'accessStatus' => 'setAccessStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversionId' => 'getConversionId',
        'conversionName' => 'getConversionName',
        'accessType' => 'getAccessType',
        'claimType' => 'getClaimType',
        'feedbackUrl' => 'getFeedbackUrl',
        'selfAttributed' => 'getSelfAttributed',
        'optimizationGoal' => 'getOptimizationGoal',
        'deepBehaviorOptimizationGoal' => 'getDeepBehaviorOptimizationGoal',
        'deepWorthOptimizationGoal' => 'getDeepWorthOptimizationGoal',
        'userActionSetId' => 'getUserActionSetId',
        'userActionSetKey' => 'getUserActionSetKey',
        'siteSetEnable' => 'getSiteSetEnable',
        'isDeleted' => 'getIsDeleted',
        'accessStatus' => 'getAccessStatus'
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
        $this->container['conversionId'] = isset($data['conversionId']) ? $data['conversionId'] : null;
        $this->container['conversionName'] = isset($data['conversionName']) ? $data['conversionName'] : null;
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['claimType'] = isset($data['claimType']) ? $data['claimType'] : null;
        $this->container['feedbackUrl'] = isset($data['feedbackUrl']) ? $data['feedbackUrl'] : null;
        $this->container['selfAttributed'] = isset($data['selfAttributed']) ? $data['selfAttributed'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['deepBehaviorOptimizationGoal'] = isset($data['deepBehaviorOptimizationGoal']) ? $data['deepBehaviorOptimizationGoal'] : null;
        $this->container['deepWorthOptimizationGoal'] = isset($data['deepWorthOptimizationGoal']) ? $data['deepWorthOptimizationGoal'] : null;
        $this->container['userActionSetId'] = isset($data['userActionSetId']) ? $data['userActionSetId'] : null;
        $this->container['userActionSetKey'] = isset($data['userActionSetKey']) ? $data['userActionSetKey'] : null;
        $this->container['siteSetEnable'] = isset($data['siteSetEnable']) ? $data['siteSetEnable'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
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
     * Gets conversionId
     *
     * @return int
     */
    public function getConversionId()
    {
        return $this->container['conversionId'];
    }

    /**
     * Sets conversionId
     *
     * @param int $conversionId conversionId
     *
     * @return $this
     */
    public function setConversionId($conversionId)
    {
        $this->container['conversionId'] = $conversionId;

        return $this;
    }

    /**
     * Gets conversionName
     *
     * @return string
     */
    public function getConversionName()
    {
        return $this->container['conversionName'];
    }

    /**
     * Sets conversionName
     *
     * @param string $conversionName conversionName
     *
     * @return $this
     */
    public function setConversionName($conversionName)
    {
        $this->container['conversionName'] = $conversionName;

        return $this;
    }

    /**
     * Gets accessType
     *
     * @return \TencentAds\Model\AccessType
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param \TencentAds\Model\AccessType $accessType accessType
     *
     * @return $this
     */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;

        return $this;
    }

    /**
     * Gets claimType
     *
     * @return \TencentAds\Model\ClaimType
     */
    public function getClaimType()
    {
        return $this->container['claimType'];
    }

    /**
     * Sets claimType
     *
     * @param \TencentAds\Model\ClaimType $claimType claimType
     *
     * @return $this
     */
    public function setClaimType($claimType)
    {
        $this->container['claimType'] = $claimType;

        return $this;
    }

    /**
     * Gets feedbackUrl
     *
     * @return string
     */
    public function getFeedbackUrl()
    {
        return $this->container['feedbackUrl'];
    }

    /**
     * Sets feedbackUrl
     *
     * @param string $feedbackUrl feedbackUrl
     *
     * @return $this
     */
    public function setFeedbackUrl($feedbackUrl)
    {
        $this->container['feedbackUrl'] = $feedbackUrl;

        return $this;
    }

    /**
     * Gets selfAttributed
     *
     * @return bool
     */
    public function getSelfAttributed()
    {
        return $this->container['selfAttributed'];
    }

    /**
     * Sets selfAttributed
     *
     * @param bool $selfAttributed selfAttributed
     *
     * @return $this
     */
    public function setSelfAttributed($selfAttributed)
    {
        $this->container['selfAttributed'] = $selfAttributed;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\IntOptimizationGoal
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\IntOptimizationGoal $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets deepBehaviorOptimizationGoal
     *
     * @return \TencentAds\Model\IntOptimizationGoal
     */
    public function getDeepBehaviorOptimizationGoal()
    {
        return $this->container['deepBehaviorOptimizationGoal'];
    }

    /**
     * Sets deepBehaviorOptimizationGoal
     *
     * @param \TencentAds\Model\IntOptimizationGoal $deepBehaviorOptimizationGoal deepBehaviorOptimizationGoal
     *
     * @return $this
     */
    public function setDeepBehaviorOptimizationGoal($deepBehaviorOptimizationGoal)
    {
        $this->container['deepBehaviorOptimizationGoal'] = $deepBehaviorOptimizationGoal;

        return $this;
    }

    /**
     * Gets deepWorthOptimizationGoal
     *
     * @return \TencentAds\Model\ConversionOptimizationGoal
     */
    public function getDeepWorthOptimizationGoal()
    {
        return $this->container['deepWorthOptimizationGoal'];
    }

    /**
     * Sets deepWorthOptimizationGoal
     *
     * @param \TencentAds\Model\ConversionOptimizationGoal $deepWorthOptimizationGoal deepWorthOptimizationGoal
     *
     * @return $this
     */
    public function setDeepWorthOptimizationGoal($deepWorthOptimizationGoal)
    {
        $this->container['deepWorthOptimizationGoal'] = $deepWorthOptimizationGoal;

        return $this;
    }

    /**
     * Gets userActionSetId
     *
     * @return int
     */
    public function getUserActionSetId()
    {
        return $this->container['userActionSetId'];
    }

    /**
     * Sets userActionSetId
     *
     * @param int $userActionSetId userActionSetId
     *
     * @return $this
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->container['userActionSetId'] = $userActionSetId;

        return $this;
    }

    /**
     * Gets userActionSetKey
     *
     * @return string
     */
    public function getUserActionSetKey()
    {
        return $this->container['userActionSetKey'];
    }

    /**
     * Sets userActionSetKey
     *
     * @param string $userActionSetKey userActionSetKey
     *
     * @return $this
     */
    public function setUserActionSetKey($userActionSetKey)
    {
        $this->container['userActionSetKey'] = $userActionSetKey;

        return $this;
    }

    /**
     * Gets siteSetEnable
     *
     * @return bool
     */
    public function getSiteSetEnable()
    {
        return $this->container['siteSetEnable'];
    }

    /**
     * Sets siteSetEnable
     *
     * @param bool $siteSetEnable siteSetEnable
     *
     * @return $this
     */
    public function setSiteSetEnable($siteSetEnable)
    {
        $this->container['siteSetEnable'] = $siteSetEnable;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets accessStatus
     *
     * @return \TencentAds\Model\AccessStatus
     */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
     * Sets accessStatus
     *
     * @param \TencentAds\Model\AccessStatus $accessStatus accessStatus
     *
     * @return $this
     */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;

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


