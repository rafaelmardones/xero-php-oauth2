<?php
/**
 * Error
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Assets API
 *
 * This is the Xero Assets API
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Asset;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AssetObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Error Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resource_validation_errors' => '\XeroAPI\XeroPHP\Models\Asset\ResourceValidationErrorsElement[]',
        'field_validation_errors' => '\XeroAPI\XeroPHP\Models\Asset\FieldValidationErrorsElement[]',
        'type' => 'string',
        'title' => 'string',
        'detail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'resource_validation_errors' => null,
        'field_validation_errors' => null,
        'type' => null,
        'title' => null,
        'detail' => null
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
        'resource_validation_errors' => 'resourceValidationErrors',
        'field_validation_errors' => 'fieldValidationErrors',
        'type' => 'type',
        'title' => 'title',
        'detail' => 'detail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resource_validation_errors' => 'setResourceValidationErrors',
        'field_validation_errors' => 'setFieldValidationErrors',
        'type' => 'setType',
        'title' => 'setTitle',
        'detail' => 'setDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resource_validation_errors' => 'getResourceValidationErrors',
        'field_validation_errors' => 'getFieldValidationErrors',
        'type' => 'getType',
        'title' => 'getTitle',
        'detail' => 'getDetail'
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
        $this->container['resource_validation_errors'] = isset($data['resource_validation_errors']) ? $data['resource_validation_errors'] : null;
        $this->container['field_validation_errors'] = isset($data['field_validation_errors']) ? $data['field_validation_errors'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
     * Gets resource_validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Asset\ResourceValidationErrorsElement[]|null
     */
    public function getResourceValidationErrors()
    {
        return $this->container['resource_validation_errors'];
    }

    /**
     * Sets resource_validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Asset\ResourceValidationErrorsElement[]|null $resource_validation_errors Array of elements of resource validation errors
     *
     * @return $this
     */
    public function setResourceValidationErrors($resource_validation_errors)
    {

        $this->container['resource_validation_errors'] = $resource_validation_errors;

        return $this;
    }



    /**
     * Gets field_validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Asset\FieldValidationErrorsElement[]|null
     */
    public function getFieldValidationErrors()
    {
        return $this->container['field_validation_errors'];
    }

    /**
     * Sets field_validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Asset\FieldValidationErrorsElement[]|null $field_validation_errors Array of elements of field validation errors
     *
     * @return $this
     */
    public function setFieldValidationErrors($field_validation_errors)
    {

        $this->container['field_validation_errors'] = $field_validation_errors;

        return $this;
    }



    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The internal type of error, not accessible externally
     *
     * @return $this
     */
    public function setType($type)
    {

        $this->container['type'] = $type;

        return $this;
    }



    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the error
     *
     * @return $this
     */
    public function setTitle($title)
    {

        $this->container['title'] = $title;

        return $this;
    }



    /**
     * Gets detail
     *
     * @return string|null
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string|null $detail Detail of the error
     *
     * @return $this
     */
    public function setDetail($detail)
    {

        $this->container['detail'] = $detail;

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
        return json_encode(
            AssetObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


