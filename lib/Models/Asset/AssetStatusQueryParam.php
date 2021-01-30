<?php
/**
 * AssetStatusQueryParam
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
use \XeroAPI\XeroPHP\AssetObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * AssetStatusQueryParam Class Doc Comment
 *
 * @category Class
 * @description See Asset Status Codes.
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetStatusQueryParam
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';
    const REGISTERED = 'REGISTERED';
    const DISPOSED = 'DISPOSED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::REGISTERED,
            self::DISPOSED,
        ];
    }
}


