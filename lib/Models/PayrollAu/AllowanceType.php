<?php
/**
 * AllowanceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace XeroAPI\XeroPHP\Models\PayrollAu;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * AllowanceType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllowanceType
{
    /**
     * Possible values of this enum
     */
    const CAR = 'CAR';
    const TRANSPORT = 'TRANSPORT';
    const LAUNDRY = 'LAUNDRY';
    const MEALS = 'MEALS';
    const TRAVEL = 'TRAVEL';
    const OTHER = 'OTHER';
    const JOBKEEPER = 'JOBKEEPER';
    const TOOLS = 'TOOLS';
    const TASKS = 'TASKS';
    const QUALIFICATIONS = 'QUALIFICATIONS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAR,
            self::TRANSPORT,
            self::LAUNDRY,
            self::MEALS,
            self::TRAVEL,
            self::OTHER,
            self::JOBKEEPER,
            self::TOOLS,
            self::TASKS,
            self::QUALIFICATIONS,
        ];
    }
}


