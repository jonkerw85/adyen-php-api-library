<?php

/**
 * Authentication webhooks
 *
 * The version of the OpenAPI document: 1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\AcsWebhooks;

use \ArrayAccess;
use Adyen\Model\AcsWebhooks\ObjectSerializer;

/**
 * AuthenticationInfo Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthenticationInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthenticationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acsTransId' => 'string',
        'challenge' => '\Adyen\Model\AcsWebhooks\ChallengeInfo',
        'challengeIndicator' => 'string',
        'createdAt' => '\DateTime',
        'deviceChannel' => 'string',
        'dsTransID' => 'string',
        'exemptionIndicator' => 'string',
        'inPSD2Scope' => 'bool',
        'messageCategory' => 'string',
        'messageVersion' => 'string',
        'riskScore' => 'int',
        'threeDSServerTransID' => 'string',
        'transStatus' => 'string',
        'transStatusReason' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acsTransId' => null,
        'challenge' => null,
        'challengeIndicator' => null,
        'createdAt' => 'date-time',
        'deviceChannel' => null,
        'dsTransID' => null,
        'exemptionIndicator' => null,
        'inPSD2Scope' => null,
        'messageCategory' => null,
        'messageVersion' => null,
        'riskScore' => 'int32',
        'threeDSServerTransID' => null,
        'transStatus' => null,
        'transStatusReason' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'acsTransId' => false,
        'challenge' => false,
        'challengeIndicator' => false,
        'createdAt' => false,
        'deviceChannel' => false,
        'dsTransID' => false,
        'exemptionIndicator' => false,
        'inPSD2Scope' => false,
        'messageCategory' => false,
        'messageVersion' => false,
        'riskScore' => true,
        'threeDSServerTransID' => false,
        'transStatus' => false,
        'transStatusReason' => false,
        'type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'acsTransId' => 'acsTransId',
        'challenge' => 'challenge',
        'challengeIndicator' => 'challengeIndicator',
        'createdAt' => 'createdAt',
        'deviceChannel' => 'deviceChannel',
        'dsTransID' => 'dsTransID',
        'exemptionIndicator' => 'exemptionIndicator',
        'inPSD2Scope' => 'inPSD2Scope',
        'messageCategory' => 'messageCategory',
        'messageVersion' => 'messageVersion',
        'riskScore' => 'riskScore',
        'threeDSServerTransID' => 'threeDSServerTransID',
        'transStatus' => 'transStatus',
        'transStatusReason' => 'transStatusReason',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acsTransId' => 'setAcsTransId',
        'challenge' => 'setChallenge',
        'challengeIndicator' => 'setChallengeIndicator',
        'createdAt' => 'setCreatedAt',
        'deviceChannel' => 'setDeviceChannel',
        'dsTransID' => 'setDsTransID',
        'exemptionIndicator' => 'setExemptionIndicator',
        'inPSD2Scope' => 'setInPSD2Scope',
        'messageCategory' => 'setMessageCategory',
        'messageVersion' => 'setMessageVersion',
        'riskScore' => 'setRiskScore',
        'threeDSServerTransID' => 'setThreeDSServerTransID',
        'transStatus' => 'setTransStatus',
        'transStatusReason' => 'setTransStatusReason',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acsTransId' => 'getAcsTransId',
        'challenge' => 'getChallenge',
        'challengeIndicator' => 'getChallengeIndicator',
        'createdAt' => 'getCreatedAt',
        'deviceChannel' => 'getDeviceChannel',
        'dsTransID' => 'getDsTransID',
        'exemptionIndicator' => 'getExemptionIndicator',
        'inPSD2Scope' => 'getInPSD2Scope',
        'messageCategory' => 'getMessageCategory',
        'messageVersion' => 'getMessageVersion',
        'riskScore' => 'getRiskScore',
        'threeDSServerTransID' => 'getThreeDSServerTransID',
        'transStatus' => 'getTransStatus',
        'transStatusReason' => 'getTransStatusReason',
        'type' => 'getType'
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
        return self::$openAPIModelName;
    }

    public const CHALLENGE_INDICATOR__01 = '01';
    public const CHALLENGE_INDICATOR__02 = '02';
    public const CHALLENGE_INDICATOR__03 = '03';
    public const CHALLENGE_INDICATOR__04 = '04';
    public const CHALLENGE_INDICATOR__05 = '05';
    public const CHALLENGE_INDICATOR__07 = '07';
    public const CHALLENGE_INDICATOR__08 = '08';
    public const CHALLENGE_INDICATOR__09 = '09';
    public const CHALLENGE_INDICATOR__80 = '80';
    public const CHALLENGE_INDICATOR__82 = '82';
    public const DEVICE_CHANNEL_APP = 'app';
    public const DEVICE_CHANNEL_BROWSER = 'browser';
    public const DEVICE_CHANNEL_THREE_DS_REQUESTOR_INITIATED = 'ThreeDSRequestorInitiated';
    public const EXEMPTION_INDICATOR_LOW_VALUE = 'lowValue';
    public const EXEMPTION_INDICATOR_SECURE_CORPORATE = 'secureCorporate';
    public const EXEMPTION_INDICATOR_TRUSTED_BENEFICIARY = 'trustedBeneficiary';
    public const EXEMPTION_INDICATOR_TRANSACTION_RISK_ANALYSIS = 'transactionRiskAnalysis';
    public const EXEMPTION_INDICATOR_ACQUIRER_EXEMPTION = 'acquirerExemption';
    public const EXEMPTION_INDICATOR_NO_EXEMPTION_APPLIED = 'noExemptionApplied';
    public const EXEMPTION_INDICATOR_VISA_DAF_EXEMPTION = 'visaDAFExemption';
    public const MESSAGE_CATEGORY_PAYMENT = 'payment';
    public const MESSAGE_CATEGORY_NON_PAYMENT = 'nonPayment';
    public const TRANS_STATUS_Y = 'Y';
    public const TRANS_STATUS_N = 'N';
    public const TRANS_STATUS_R = 'R';
    public const TRANS_STATUS_I = 'I';
    public const TRANS_STATUS_U = 'U';
    public const TRANS_STATUS_REASON__01 = '01';
    public const TRANS_STATUS_REASON__02 = '02';
    public const TRANS_STATUS_REASON__03 = '03';
    public const TRANS_STATUS_REASON__04 = '04';
    public const TRANS_STATUS_REASON__05 = '05';
    public const TRANS_STATUS_REASON__06 = '06';
    public const TRANS_STATUS_REASON__07 = '07';
    public const TRANS_STATUS_REASON__08 = '08';
    public const TRANS_STATUS_REASON__09 = '09';
    public const TRANS_STATUS_REASON__10 = '10';
    public const TRANS_STATUS_REASON__11 = '11';
    public const TRANS_STATUS_REASON__12 = '12';
    public const TRANS_STATUS_REASON__13 = '13';
    public const TRANS_STATUS_REASON__14 = '14';
    public const TRANS_STATUS_REASON__15 = '15';
    public const TRANS_STATUS_REASON__16 = '16';
    public const TRANS_STATUS_REASON__17 = '17';
    public const TRANS_STATUS_REASON__18 = '18';
    public const TRANS_STATUS_REASON__19 = '19';
    public const TRANS_STATUS_REASON__20 = '20';
    public const TRANS_STATUS_REASON__21 = '21';
    public const TRANS_STATUS_REASON__22 = '22';
    public const TRANS_STATUS_REASON__23 = '23';
    public const TRANS_STATUS_REASON__24 = '24';
    public const TRANS_STATUS_REASON__25 = '25';
    public const TRANS_STATUS_REASON__26 = '26';
    public const TRANS_STATUS_REASON__80 = '80';
    public const TRANS_STATUS_REASON__81 = '81';
    public const TRANS_STATUS_REASON__82 = '82';
    public const TRANS_STATUS_REASON__83 = '83';
    public const TRANS_STATUS_REASON__84 = '84';
    public const TRANS_STATUS_REASON__85 = '85';
    public const TRANS_STATUS_REASON__86 = '86';
    public const TRANS_STATUS_REASON__87 = '87';
    public const TRANS_STATUS_REASON__88 = '88';
    public const TYPE_FRICTIONLESS = 'frictionless';
    public const TYPE_CHALLENGE = 'challenge';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeIndicatorAllowableValues()
    {
        return [
            self::CHALLENGE_INDICATOR__01,
            self::CHALLENGE_INDICATOR__02,
            self::CHALLENGE_INDICATOR__03,
            self::CHALLENGE_INDICATOR__04,
            self::CHALLENGE_INDICATOR__05,
            self::CHALLENGE_INDICATOR__07,
            self::CHALLENGE_INDICATOR__08,
            self::CHALLENGE_INDICATOR__09,
            self::CHALLENGE_INDICATOR__80,
            self::CHALLENGE_INDICATOR__82,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceChannelAllowableValues()
    {
        return [
            self::DEVICE_CHANNEL_APP,
            self::DEVICE_CHANNEL_BROWSER,
            self::DEVICE_CHANNEL_THREE_DS_REQUESTOR_INITIATED,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExemptionIndicatorAllowableValues()
    {
        return [
            self::EXEMPTION_INDICATOR_LOW_VALUE,
            self::EXEMPTION_INDICATOR_SECURE_CORPORATE,
            self::EXEMPTION_INDICATOR_TRUSTED_BENEFICIARY,
            self::EXEMPTION_INDICATOR_TRANSACTION_RISK_ANALYSIS,
            self::EXEMPTION_INDICATOR_ACQUIRER_EXEMPTION,
            self::EXEMPTION_INDICATOR_NO_EXEMPTION_APPLIED,
            self::EXEMPTION_INDICATOR_VISA_DAF_EXEMPTION,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageCategoryAllowableValues()
    {
        return [
            self::MESSAGE_CATEGORY_PAYMENT,
            self::MESSAGE_CATEGORY_NON_PAYMENT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransStatusAllowableValues()
    {
        return [
            self::TRANS_STATUS_Y,
            self::TRANS_STATUS_N,
            self::TRANS_STATUS_R,
            self::TRANS_STATUS_I,
            self::TRANS_STATUS_U,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransStatusReasonAllowableValues()
    {
        return [
            self::TRANS_STATUS_REASON__01,
            self::TRANS_STATUS_REASON__02,
            self::TRANS_STATUS_REASON__03,
            self::TRANS_STATUS_REASON__04,
            self::TRANS_STATUS_REASON__05,
            self::TRANS_STATUS_REASON__06,
            self::TRANS_STATUS_REASON__07,
            self::TRANS_STATUS_REASON__08,
            self::TRANS_STATUS_REASON__09,
            self::TRANS_STATUS_REASON__10,
            self::TRANS_STATUS_REASON__11,
            self::TRANS_STATUS_REASON__12,
            self::TRANS_STATUS_REASON__13,
            self::TRANS_STATUS_REASON__14,
            self::TRANS_STATUS_REASON__15,
            self::TRANS_STATUS_REASON__16,
            self::TRANS_STATUS_REASON__17,
            self::TRANS_STATUS_REASON__18,
            self::TRANS_STATUS_REASON__19,
            self::TRANS_STATUS_REASON__20,
            self::TRANS_STATUS_REASON__21,
            self::TRANS_STATUS_REASON__22,
            self::TRANS_STATUS_REASON__23,
            self::TRANS_STATUS_REASON__24,
            self::TRANS_STATUS_REASON__25,
            self::TRANS_STATUS_REASON__26,
            self::TRANS_STATUS_REASON__80,
            self::TRANS_STATUS_REASON__81,
            self::TRANS_STATUS_REASON__82,
            self::TRANS_STATUS_REASON__83,
            self::TRANS_STATUS_REASON__84,
            self::TRANS_STATUS_REASON__85,
            self::TRANS_STATUS_REASON__86,
            self::TRANS_STATUS_REASON__87,
            self::TRANS_STATUS_REASON__88,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FRICTIONLESS,
            self::TYPE_CHALLENGE,
        ];
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
        $this->setIfExists('acsTransId', $data ?? [], null);
        $this->setIfExists('challenge', $data ?? [], null);
        $this->setIfExists('challengeIndicator', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('deviceChannel', $data ?? [], null);
        $this->setIfExists('dsTransID', $data ?? [], null);
        $this->setIfExists('exemptionIndicator', $data ?? [], null);
        $this->setIfExists('inPSD2Scope', $data ?? [], null);
        $this->setIfExists('messageCategory', $data ?? [], null);
        $this->setIfExists('messageVersion', $data ?? [], null);
        $this->setIfExists('riskScore', $data ?? [], null);
        $this->setIfExists('threeDSServerTransID', $data ?? [], null);
        $this->setIfExists('transStatus', $data ?? [], null);
        $this->setIfExists('transStatusReason', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acsTransId'] === null) {
            $invalidProperties[] = "'acsTransId' can't be null";
        }
        if ($this->container['challengeIndicator'] === null) {
            $invalidProperties[] = "'challengeIndicator' can't be null";
        }
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($this->container['challengeIndicator']) && !in_array($this->container['challengeIndicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'challengeIndicator', must be one of '%s'",
                $this->container['challengeIndicator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['deviceChannel'] === null) {
            $invalidProperties[] = "'deviceChannel' can't be null";
        }
        $allowedValues = $this->getDeviceChannelAllowableValues();
        if (!is_null($this->container['deviceChannel']) && !in_array($this->container['deviceChannel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deviceChannel', must be one of '%s'",
                $this->container['deviceChannel'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dsTransID'] === null) {
            $invalidProperties[] = "'dsTransID' can't be null";
        }
        $allowedValues = $this->getExemptionIndicatorAllowableValues();
        if (!is_null($this->container['exemptionIndicator']) && !in_array($this->container['exemptionIndicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'exemptionIndicator', must be one of '%s'",
                $this->container['exemptionIndicator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inPSD2Scope'] === null) {
            $invalidProperties[] = "'inPSD2Scope' can't be null";
        }
        if ($this->container['messageCategory'] === null) {
            $invalidProperties[] = "'messageCategory' can't be null";
        }
        $allowedValues = $this->getMessageCategoryAllowableValues();
        if (!is_null($this->container['messageCategory']) && !in_array($this->container['messageCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'messageCategory', must be one of '%s'",
                $this->container['messageCategory'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['messageVersion'] === null) {
            $invalidProperties[] = "'messageVersion' can't be null";
        }
        if ($this->container['threeDSServerTransID'] === null) {
            $invalidProperties[] = "'threeDSServerTransID' can't be null";
        }
        if ($this->container['transStatus'] === null) {
            $invalidProperties[] = "'transStatus' can't be null";
        }
        $allowedValues = $this->getTransStatusAllowableValues();
        if (!is_null($this->container['transStatus']) && !in_array($this->container['transStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transStatus', must be one of '%s'",
                $this->container['transStatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransStatusReasonAllowableValues();
        if (!is_null($this->container['transStatusReason']) && !in_array($this->container['transStatusReason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transStatusReason', must be one of '%s'",
                $this->container['transStatusReason'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets acsTransId
     *
     * @return string
     */
    public function getAcsTransId()
    {
        return $this->container['acsTransId'];
    }

    /**
     * Sets acsTransId
     *
     * @param string $acsTransId Universally unique transaction identifier assigned by the Access Control Server (ACS) to identify a single transaction.
     *
     * @return self
     */
    public function setAcsTransId($acsTransId)
    {
        if (is_null($acsTransId)) {
            throw new \InvalidArgumentException('non-nullable acsTransId cannot be null');
        }
        $this->container['acsTransId'] = $acsTransId;

        return $this;
    }

    /**
     * Gets challenge
     *
     * @return \Adyen\Model\AcsWebhooks\ChallengeInfo|null
     */
    public function getChallenge()
    {
        return $this->container['challenge'];
    }

    /**
     * Sets challenge
     *
     * @param \Adyen\Model\AcsWebhooks\ChallengeInfo|null $challenge challenge
     *
     * @return self
     */
    public function setChallenge($challenge)
    {
        if (is_null($challenge)) {
            throw new \InvalidArgumentException('non-nullable challenge cannot be null');
        }
        $this->container['challenge'] = $challenge;

        return $this;
    }

    /**
     * Gets challengeIndicator
     *
     * @return string
     */
    public function getChallengeIndicator()
    {
        return $this->container['challengeIndicator'];
    }

    /**
     * Sets challengeIndicator
     *
     * @param string $challengeIndicator Specifies a preference for receiving a challenge. Possible values:  * **01**: No preference * **02**: No challenge requested * **03**: Challenge requested (preference) * **04**: Challenge requested (mandate) * **05**: No challenge requested (transactional risk analysis is already performed) * **07**: No challenge requested (SCA is already performed) * **08**: No challenge requested (trusted beneficiaries exemption of no challenge required) * **09**: Challenge requested (trusted beneficiaries prompt requested if challenge required) * **80**: No challenge requested (secure corporate payment with Mastercard) * **82**: No challenge requested (secure corporate payment with Visa)
     *
     * @return self
     */
    public function setChallengeIndicator($challengeIndicator)
    {
        if (is_null($challengeIndicator)) {
            throw new \InvalidArgumentException('non-nullable challengeIndicator cannot be null');
        }
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!in_array($challengeIndicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'challengeIndicator', must be one of '%s'",
                    $challengeIndicator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challengeIndicator'] = $challengeIndicator;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt Date and time in UTC of the cardholder authentication.   [ISO 8601](https://www.w3.org/TR/NOTE-datetime) format: YYYY-MM-DDThh:mm:ss+TZD, for example, **2020-12-18T10:15:30+01:00**.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets deviceChannel
     *
     * @return string
     */
    public function getDeviceChannel()
    {
        return $this->container['deviceChannel'];
    }

    /**
     * Sets deviceChannel
     *
     * @param string $deviceChannel Indicates the type of channel interface being used to initiate the transaction. Possible values:  * **app** * **browser** * **3DSRequestorInitiated** (initiated by a merchant when the cardholder is not available)
     *
     * @return self
     */
    public function setDeviceChannel($deviceChannel)
    {
        if (is_null($deviceChannel)) {
            throw new \InvalidArgumentException('non-nullable deviceChannel cannot be null');
        }
        $allowedValues = $this->getDeviceChannelAllowableValues();
        if (!in_array($deviceChannel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deviceChannel', must be one of '%s'",
                    $deviceChannel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deviceChannel'] = $deviceChannel;

        return $this;
    }

    /**
     * Gets dsTransID
     *
     * @return string
     */
    public function getDsTransID()
    {
        return $this->container['dsTransID'];
    }

    /**
     * Sets dsTransID
     *
     * @param string $dsTransID Universally unique transaction identifier assigned by the DS (card scheme) to identify a single transaction.
     *
     * @return self
     */
    public function setDsTransID($dsTransID)
    {
        if (is_null($dsTransID)) {
            throw new \InvalidArgumentException('non-nullable dsTransID cannot be null');
        }
        $this->container['dsTransID'] = $dsTransID;

        return $this;
    }

    /**
     * Gets exemptionIndicator
     *
     * @return string|null
     */
    public function getExemptionIndicator()
    {
        return $this->container['exemptionIndicator'];
    }

    /**
     * Sets exemptionIndicator
     *
     * @param string|null $exemptionIndicator Indicates the exemption type that was applied to the authentication by the issuer, if exemption applied. Possible values:  * **lowValue** * **secureCorporate** * **trustedBeneficiary** * **transactionRiskAnalysis** * **acquirerExemption** * **noExemptionApplied** * **visaDAFExemption**
     *
     * @return self
     */
    public function setExemptionIndicator($exemptionIndicator)
    {
        if (is_null($exemptionIndicator)) {
            throw new \InvalidArgumentException('non-nullable exemptionIndicator cannot be null');
        }
        $allowedValues = $this->getExemptionIndicatorAllowableValues();
        if (!in_array($exemptionIndicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'exemptionIndicator', must be one of '%s'",
                    $exemptionIndicator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exemptionIndicator'] = $exemptionIndicator;

        return $this;
    }

    /**
     * Gets inPSD2Scope
     *
     * @return bool
     */
    public function getInPSD2Scope()
    {
        return $this->container['inPSD2Scope'];
    }

    /**
     * Sets inPSD2Scope
     *
     * @param bool $inPSD2Scope Indicates if the purchase was in the PSD2 scope.
     *
     * @return self
     */
    public function setInPSD2Scope($inPSD2Scope)
    {
        if (is_null($inPSD2Scope)) {
            throw new \InvalidArgumentException('non-nullable inPSD2Scope cannot be null');
        }
        $this->container['inPSD2Scope'] = $inPSD2Scope;

        return $this;
    }

    /**
     * Gets messageCategory
     *
     * @return string
     */
    public function getMessageCategory()
    {
        return $this->container['messageCategory'];
    }

    /**
     * Sets messageCategory
     *
     * @param string $messageCategory Identifies the category of the message for a specific use case. Possible values:  * **payment** * **nonPayment**
     *
     * @return self
     */
    public function setMessageCategory($messageCategory)
    {
        if (is_null($messageCategory)) {
            throw new \InvalidArgumentException('non-nullable messageCategory cannot be null');
        }
        $allowedValues = $this->getMessageCategoryAllowableValues();
        if (!in_array($messageCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'messageCategory', must be one of '%s'",
                    $messageCategory,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['messageCategory'] = $messageCategory;

        return $this;
    }

    /**
     * Gets messageVersion
     *
     * @return string
     */
    public function getMessageVersion()
    {
        return $this->container['messageVersion'];
    }

    /**
     * Sets messageVersion
     *
     * @param string $messageVersion The `messageVersion` value as defined in the 3D Secure 2 specification.
     *
     * @return self
     */
    public function setMessageVersion($messageVersion)
    {
        if (is_null($messageVersion)) {
            throw new \InvalidArgumentException('non-nullable messageVersion cannot be null');
        }
        $this->container['messageVersion'] = $messageVersion;

        return $this;
    }

    /**
     * Gets riskScore
     *
     * @return int|null
     */
    public function getRiskScore()
    {
        return $this->container['riskScore'];
    }

    /**
     * Sets riskScore
     *
     * @param int|null $riskScore Risk score calculated from the transaction rules.
     *
     * @return self
     */
    public function setRiskScore($riskScore)
    {
        // Do nothing for nullable integers
        $this->container['riskScore'] = $riskScore;

        return $this;
    }

    /**
     * Gets threeDSServerTransID
     *
     * @return string
     */
    public function getThreeDSServerTransID()
    {
        return $this->container['threeDSServerTransID'];
    }

    /**
     * Sets threeDSServerTransID
     *
     * @param string $threeDSServerTransID The `threeDSServerTransID` value as defined in the 3D Secure 2 specification.
     *
     * @return self
     */
    public function setThreeDSServerTransID($threeDSServerTransID)
    {
        if (is_null($threeDSServerTransID)) {
            throw new \InvalidArgumentException('non-nullable threeDSServerTransID cannot be null');
        }
        $this->container['threeDSServerTransID'] = $threeDSServerTransID;

        return $this;
    }

    /**
     * Gets transStatus
     *
     * @return string
     */
    public function getTransStatus()
    {
        return $this->container['transStatus'];
    }

    /**
     * Sets transStatus
     *
     * @param string $transStatus The `transStatus` value as defined in the 3D Secure 2 specification. Possible values:  * **Y**: Authentication / Account verification successful. * **N**: Not Authenticated / Account not verified. Transaction denied. * **U**: Authentication / Account verification could not be performed. * **I**: Informational Only / 3D Secure Requestor challenge preference acknowledged. * **R**: Authentication / Account verification rejected by the Issuer.
     *
     * @return self
     */
    public function setTransStatus($transStatus)
    {
        if (is_null($transStatus)) {
            throw new \InvalidArgumentException('non-nullable transStatus cannot be null');
        }
        $allowedValues = $this->getTransStatusAllowableValues();
        if (!in_array($transStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transStatus', must be one of '%s'",
                    $transStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transStatus'] = $transStatus;

        return $this;
    }

    /**
     * Gets transStatusReason
     *
     * @return string|null
     */
    public function getTransStatusReason()
    {
        return $this->container['transStatusReason'];
    }

    /**
     * Sets transStatusReason
     *
     * @param string|null $transStatusReason Provides information on why the `transStatus` field has the specified value. For possible values, refer to [our docs](https://docs.adyen.com/online-payments/3d-secure/api-reference#possible-transstatusreason-values).
     *
     * @return self
     */
    public function setTransStatusReason($transStatusReason)
    {
        if (is_null($transStatusReason)) {
            throw new \InvalidArgumentException('non-nullable transStatusReason cannot be null');
        }
        $allowedValues = $this->getTransStatusReasonAllowableValues();
        if (!in_array($transStatusReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transStatusReason', must be one of '%s'",
                    $transStatusReason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transStatusReason'] = $transStatusReason;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of authentication performed. Possible values:  * **frictionless** * **challenge**
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}
