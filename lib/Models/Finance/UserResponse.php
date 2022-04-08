<?php
/**
 * UserResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \XeroAPI\XeroPHP\FinanceObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * UserResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string''user_created_date_utc' => '\DateTime''last_login_date_utc' => '\DateTime''is_external_partner' => 'bool''has_accountant_role' => 'bool''month_period' => 'string''number_of_logins' => 'int''number_of_documents_created' => 'int''net_value_documents_created' => 'double''absolute_value_documents_created' => 'double''attached_practices' => '\XeroAPI\XeroPHP\Models\Finance\PracticeResponse[]''history_records' => '\XeroAPI\XeroPHP\Models\Finance\HistoryRecordResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'uuid''user_created_date_utc' => 'date-time''last_login_date_utc' => 'date-time''is_external_partner' => null'has_accountant_role' => null'month_period' => null'number_of_logins' => 'int32''number_of_documents_created' => 'int32''net_value_documents_created' => 'double''absolute_value_documents_created' => 'double''attached_practices' => null'history_records' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'userId''user_created_date_utc' => 'userCreatedDateUtc''last_login_date_utc' => 'lastLoginDateUtc''is_external_partner' => 'isExternalPartner''has_accountant_role' => 'hasAccountantRole''month_period' => 'monthPeriod''number_of_logins' => 'numberOfLogins''number_of_documents_created' => 'numberOfDocumentsCreated''net_value_documents_created' => 'netValueDocumentsCreated''absolute_value_documents_created' => 'absoluteValueDocumentsCreated''attached_practices' => 'attachedPractices''history_records' => 'historyRecords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId''user_created_date_utc' => 'setUserCreatedDateUtc''last_login_date_utc' => 'setLastLoginDateUtc''is_external_partner' => 'setIsExternalPartner''has_accountant_role' => 'setHasAccountantRole''month_period' => 'setMonthPeriod''number_of_logins' => 'setNumberOfLogins''number_of_documents_created' => 'setNumberOfDocumentsCreated''net_value_documents_created' => 'setNetValueDocumentsCreated''absolute_value_documents_created' => 'setAbsoluteValueDocumentsCreated''attached_practices' => 'setAttachedPractices''history_records' => 'setHistoryRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId''user_created_date_utc' => 'getUserCreatedDateUtc''last_login_date_utc' => 'getLastLoginDateUtc''is_external_partner' => 'getIsExternalPartner''has_accountant_role' => 'getHasAccountantRole''month_period' => 'getMonthPeriod''number_of_logins' => 'getNumberOfLogins''number_of_documents_created' => 'getNumberOfDocumentsCreated''net_value_documents_created' => 'getNetValueDocumentsCreated''absolute_value_documents_created' => 'getAbsoluteValueDocumentsCreated''attached_practices' => 'getAttachedPractices''history_records' => 'getHistoryRecords'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_created_date_utc'] = isset($data['user_created_date_utc']) ? $data['user_created_date_utc'] : null;
        $this->container['last_login_date_utc'] = isset($data['last_login_date_utc']) ? $data['last_login_date_utc'] : null;
        $this->container['is_external_partner'] = isset($data['is_external_partner']) ? $data['is_external_partner'] : null;
        $this->container['has_accountant_role'] = isset($data['has_accountant_role']) ? $data['has_accountant_role'] : null;
        $this->container['month_period'] = isset($data['month_period']) ? $data['month_period'] : null;
        $this->container['number_of_logins'] = isset($data['number_of_logins']) ? $data['number_of_logins'] : null;
        $this->container['number_of_documents_created'] = isset($data['number_of_documents_created']) ? $data['number_of_documents_created'] : null;
        $this->container['net_value_documents_created'] = isset($data['net_value_documents_created']) ? $data['net_value_documents_created'] : null;
        $this->container['absolute_value_documents_created'] = isset($data['absolute_value_documents_created']) ? $data['absolute_value_documents_created'] : null;
        $this->container['attached_practices'] = isset($data['attached_practices']) ? $data['attached_practices'] : null;
        $this->container['history_records'] = isset($data['history_records']) ? $data['history_records'] : null;
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The Xero identifier for the user
     *
     * @return $this
     */
    public function setUserId($user_id)
    {

        $this->container['user_id'] = $user_id;

        return $this;
    }



    /**
     * Gets user_created_date_utc
     *
     * @return \DateTime|null
     */
    public function getUserCreatedDateUtc()
    {
        return $this->container['user_created_date_utc'];
    }

    /**
     * Sets user_created_date_utc
     *
     * @param \DateTime|null $user_created_date_utc Timestamp of user creation.
     *
     * @return $this
     */
    public function setUserCreatedDateUtc($user_created_date_utc)
    {

        $this->container['user_created_date_utc'] = $user_created_date_utc;

        return $this;
    }



    /**
     * Gets last_login_date_utc
     *
     * @return \DateTime|null
     */
    public function getLastLoginDateUtc()
    {
        return $this->container['last_login_date_utc'];
    }

    /**
     * Sets last_login_date_utc
     *
     * @param \DateTime|null $last_login_date_utc Timestamp of user last login
     *
     * @return $this
     */
    public function setLastLoginDateUtc($last_login_date_utc)
    {

        $this->container['last_login_date_utc'] = $last_login_date_utc;

        return $this;
    }



    /**
     * Gets is_external_partner
     *
     * @return bool|null
     */
    public function getIsExternalPartner()
    {
        return $this->container['is_external_partner'];
    }

    /**
     * Sets is_external_partner
     *
     * @param bool|null $is_external_partner User is external partner.
     *
     * @return $this
     */
    public function setIsExternalPartner($is_external_partner)
    {

        $this->container['is_external_partner'] = $is_external_partner;

        return $this;
    }



    /**
     * Gets has_accountant_role
     *
     * @return bool|null
     */
    public function getHasAccountantRole()
    {
        return $this->container['has_accountant_role'];
    }

    /**
     * Sets has_accountant_role
     *
     * @param bool|null $has_accountant_role User has Accountant role.
     *
     * @return $this
     */
    public function setHasAccountantRole($has_accountant_role)
    {

        $this->container['has_accountant_role'] = $has_accountant_role;

        return $this;
    }



    /**
     * Gets month_period
     *
     * @return string|null
     */
    public function getMonthPeriod()
    {
        return $this->container['month_period'];
    }

    /**
     * Sets month_period
     *
     * @param string|null $month_period Month period in format  yyyy-MM.
     *
     * @return $this
     */
    public function setMonthPeriod($month_period)
    {

        $this->container['month_period'] = $month_period;

        return $this;
    }



    /**
     * Gets number_of_logins
     *
     * @return int|null
     */
    public function getNumberOfLogins()
    {
        return $this->container['number_of_logins'];
    }

    /**
     * Sets number_of_logins
     *
     * @param int|null $number_of_logins Number of times the user has logged in.
     *
     * @return $this
     */
    public function setNumberOfLogins($number_of_logins)
    {

        $this->container['number_of_logins'] = $number_of_logins;

        return $this;
    }



    /**
     * Gets number_of_documents_created
     *
     * @return int|null
     */
    public function getNumberOfDocumentsCreated()
    {
        return $this->container['number_of_documents_created'];
    }

    /**
     * Sets number_of_documents_created
     *
     * @param int|null $number_of_documents_created Number of documents created.
     *
     * @return $this
     */
    public function setNumberOfDocumentsCreated($number_of_documents_created)
    {

        $this->container['number_of_documents_created'] = $number_of_documents_created;

        return $this;
    }



    /**
     * Gets net_value_documents_created
     *
     * @return double|null
     */
    public function getNetValueDocumentsCreated()
    {
        return $this->container['net_value_documents_created'];
    }

    /**
     * Sets net_value_documents_created
     *
     * @param double|null $net_value_documents_created Net value of documents created.
     *
     * @return $this
     */
    public function setNetValueDocumentsCreated($net_value_documents_created)
    {

        $this->container['net_value_documents_created'] = $net_value_documents_created;

        return $this;
    }



    /**
     * Gets absolute_value_documents_created
     *
     * @return double|null
     */
    public function getAbsoluteValueDocumentsCreated()
    {
        return $this->container['absolute_value_documents_created'];
    }

    /**
     * Sets absolute_value_documents_created
     *
     * @param double|null $absolute_value_documents_created Absolute value of documents created.
     *
     * @return $this
     */
    public function setAbsoluteValueDocumentsCreated($absolute_value_documents_created)
    {

        $this->container['absolute_value_documents_created'] = $absolute_value_documents_created;

        return $this;
    }



    /**
     * Gets attached_practices
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\PracticeResponse[]|null
     */
    public function getAttachedPractices()
    {
        return $this->container['attached_practices'];
    }

    /**
     * Sets attached_practices
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\PracticeResponse[]|null $attached_practices attached_practices
     *
     * @return $this
     */
    public function setAttachedPractices($attached_practices)
    {

        $this->container['attached_practices'] = $attached_practices;

        return $this;
    }



    /**
     * Gets history_records
     *
     * @return \XeroAPI\XeroPHP\Models\Finance\HistoryRecordResponse[]|null
     */
    public function getHistoryRecords()
    {
        return $this->container['history_records'];
    }

    /**
     * Sets history_records
     *
     * @param \XeroAPI\XeroPHP\Models\Finance\HistoryRecordResponse[]|null $history_records history_records
     *
     * @return $this
     */
    public function setHistoryRecords($history_records)
    {

        $this->container['history_records'] = $history_records;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
     #[ReturnTypeWillChange]
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
        return json_encode(
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


