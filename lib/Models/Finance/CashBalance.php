<?php
/**
 * CashBalance
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
 * CashBalance Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CashBalance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opening_cash_balance' => 'double''closing_cash_balance' => 'double''net_cash_movement' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'opening_cash_balance' => 'double''closing_cash_balance' => 'double''net_cash_movement' => 'double'
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
        'opening_cash_balance' => 'openingCashBalance''closing_cash_balance' => 'closingCashBalance''net_cash_movement' => 'netCashMovement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opening_cash_balance' => 'setOpeningCashBalance''closing_cash_balance' => 'setClosingCashBalance''net_cash_movement' => 'setNetCashMovement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opening_cash_balance' => 'getOpeningCashBalance''closing_cash_balance' => 'getClosingCashBalance''net_cash_movement' => 'getNetCashMovement'
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
        $this->container['opening_cash_balance'] = isset($data['opening_cash_balance']) ? $data['opening_cash_balance'] : null;
        $this->container['closing_cash_balance'] = isset($data['closing_cash_balance']) ? $data['closing_cash_balance'] : null;
        $this->container['net_cash_movement'] = isset($data['net_cash_movement']) ? $data['net_cash_movement'] : null;
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
     * Gets opening_cash_balance
     *
     * @return double|null
     */
    public function getOpeningCashBalance()
    {
        return $this->container['opening_cash_balance'];
    }

    /**
     * Sets opening_cash_balance
     *
     * @param double|null $opening_cash_balance Opening balance of cash and cash equivalents
     *
     * @return $this
     */
    public function setOpeningCashBalance($opening_cash_balance)
    {

        $this->container['opening_cash_balance'] = $opening_cash_balance;

        return $this;
    }



    /**
     * Gets closing_cash_balance
     *
     * @return double|null
     */
    public function getClosingCashBalance()
    {
        return $this->container['closing_cash_balance'];
    }

    /**
     * Sets closing_cash_balance
     *
     * @param double|null $closing_cash_balance Closing balance of cash and cash equivalents
     *
     * @return $this
     */
    public function setClosingCashBalance($closing_cash_balance)
    {

        $this->container['closing_cash_balance'] = $closing_cash_balance;

        return $this;
    }



    /**
     * Gets net_cash_movement
     *
     * @return double|null
     */
    public function getNetCashMovement()
    {
        return $this->container['net_cash_movement'];
    }

    /**
     * Sets net_cash_movement
     *
     * @param double|null $net_cash_movement Net movement of cash and cash equivalents for the period
     *
     * @return $this
     */
    public function setNetCashMovement($net_cash_movement)
    {

        $this->container['net_cash_movement'] = $net_cash_movement;

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


