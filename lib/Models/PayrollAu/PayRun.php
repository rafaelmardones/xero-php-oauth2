<?php
/**
 * PayRun
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

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * PayRun Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payroll_calendar_id' => 'string''pay_run_id' => 'string''pay_run_period_start_date' => 'string''pay_run_period_end_date' => 'string''pay_run_status' => '\XeroAPI\XeroPHP\Models\PayrollAu\PayRunStatus''payment_date' => 'string''payslip_message' => 'string''updated_date_utc' => 'string''payslips' => '\XeroAPI\XeroPHP\Models\PayrollAu\PayslipSummary[]''wages' => 'double''deductions' => 'double''tax' => 'double''super' => 'double''reimbursement' => 'double''net_pay' => 'double''validation_errors' => '\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payroll_calendar_id' => 'uuid''pay_run_id' => 'uuid''pay_run_period_start_date' => null'pay_run_period_end_date' => null'pay_run_status' => null'payment_date' => null'payslip_message' => null'updated_date_utc' => null'payslips' => null'wages' => 'double''deductions' => 'double''tax' => 'double''super' => 'double''reimbursement' => 'double''net_pay' => 'double''validation_errors' => null
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
        'payroll_calendar_id' => 'PayrollCalendarID''pay_run_id' => 'PayRunID''pay_run_period_start_date' => 'PayRunPeriodStartDate''pay_run_period_end_date' => 'PayRunPeriodEndDate''pay_run_status' => 'PayRunStatus''payment_date' => 'PaymentDate''payslip_message' => 'PayslipMessage''updated_date_utc' => 'UpdatedDateUTC''payslips' => 'Payslips''wages' => 'Wages''deductions' => 'Deductions''tax' => 'Tax''super' => 'Super''reimbursement' => 'Reimbursement''net_pay' => 'NetPay''validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payroll_calendar_id' => 'setPayrollCalendarId''pay_run_id' => 'setPayRunId''pay_run_period_start_date' => 'setPayRunPeriodStartDate''pay_run_period_end_date' => 'setPayRunPeriodEndDate''pay_run_status' => 'setPayRunStatus''payment_date' => 'setPaymentDate''payslip_message' => 'setPayslipMessage''updated_date_utc' => 'setUpdatedDateUtc''payslips' => 'setPayslips''wages' => 'setWages''deductions' => 'setDeductions''tax' => 'setTax''super' => 'setSuper''reimbursement' => 'setReimbursement''net_pay' => 'setNetPay''validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payroll_calendar_id' => 'getPayrollCalendarId''pay_run_id' => 'getPayRunId''pay_run_period_start_date' => 'getPayRunPeriodStartDate''pay_run_period_end_date' => 'getPayRunPeriodEndDate''pay_run_status' => 'getPayRunStatus''payment_date' => 'getPaymentDate''payslip_message' => 'getPayslipMessage''updated_date_utc' => 'getUpdatedDateUtc''payslips' => 'getPayslips''wages' => 'getWages''deductions' => 'getDeductions''tax' => 'getTax''super' => 'getSuper''reimbursement' => 'getReimbursement''net_pay' => 'getNetPay''validation_errors' => 'getValidationErrors'
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
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['pay_run_id'] = isset($data['pay_run_id']) ? $data['pay_run_id'] : null;
        $this->container['pay_run_period_start_date'] = isset($data['pay_run_period_start_date']) ? $data['pay_run_period_start_date'] : null;
        $this->container['pay_run_period_end_date'] = isset($data['pay_run_period_end_date']) ? $data['pay_run_period_end_date'] : null;
        $this->container['pay_run_status'] = isset($data['pay_run_status']) ? $data['pay_run_status'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['payslip_message'] = isset($data['payslip_message']) ? $data['payslip_message'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['payslips'] = isset($data['payslips']) ? $data['payslips'] : null;
        $this->container['wages'] = isset($data['wages']) ? $data['wages'] : null;
        $this->container['deductions'] = isset($data['deductions']) ? $data['deductions'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['super'] = isset($data['super']) ? $data['super'] : null;
        $this->container['reimbursement'] = isset($data['reimbursement']) ? $data['reimbursement'] : null;
        $this->container['net_pay'] = isset($data['net_pay']) ? $data['net_pay'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payroll_calendar_id'] === null) {
            $invalidProperties[] = "'payroll_calendar_id' can't be null";
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
     * Gets payroll_calendar_id
     *
     * @return string
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string $payroll_calendar_id Xero identifier for pay run
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets pay_run_id
     *
     * @return string|null
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param string|null $pay_run_id Xero identifier for pay run
     *
     * @return $this
     */
    public function setPayRunId($pay_run_id)
    {

        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }



    /**
     * Gets pay_run_period_start_date
     *
     * @return string|null
     */
    public function getPayRunPeriodStartDate()
    {
        return $this->container['pay_run_period_start_date'];
    }
    public function getPayRunPeriodStartDateAsDate()
    {
      if ($this->getPayRunPeriodStartDate() != null) {
        return StringUtil::convertStringToDate($this->getPayRunPeriodStartDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets pay_run_period_start_date
     *
     * @param string|null $pay_run_period_start_date Period Start Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayRunPeriodStartDate($pay_run_period_start_date)
    {

        $this->container['pay_run_period_start_date'] = $pay_run_period_start_date;

        return $this;
    }
    /**
     * Sets pay_run_period_start_date
     *
     * @param \DateTime |null $pay_run_period_start_date Period Start Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayRunPeriodStartDateAsDate($pay_run_period_start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($pay_run_period_start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($pay_run_period_start_date->format('Y-m-d')." UTC") * 1000;
        $pay_run_period_start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['pay_run_period_start_date'] = $pay_run_period_start_date;
      return $this;
    }



    /**
     * Gets pay_run_period_end_date
     *
     * @return string|null
     */
    public function getPayRunPeriodEndDate()
    {
        return $this->container['pay_run_period_end_date'];
    }
    public function getPayRunPeriodEndDateAsDate()
    {
      if ($this->getPayRunPeriodEndDate() != null) {
        return StringUtil::convertStringToDate($this->getPayRunPeriodEndDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets pay_run_period_end_date
     *
     * @param string|null $pay_run_period_end_date Period End Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayRunPeriodEndDate($pay_run_period_end_date)
    {

        $this->container['pay_run_period_end_date'] = $pay_run_period_end_date;

        return $this;
    }
    /**
     * Sets pay_run_period_end_date
     *
     * @param \DateTime |null $pay_run_period_end_date Period End Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayRunPeriodEndDateAsDate($pay_run_period_end_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($pay_run_period_end_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($pay_run_period_end_date->format('Y-m-d')." UTC") * 1000;
        $pay_run_period_end_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['pay_run_period_end_date'] = $pay_run_period_end_date;
      return $this;
    }



    /**
     * Gets pay_run_status
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\PayRunStatus|null
     */
    public function getPayRunStatus()
    {
        return $this->container['pay_run_status'];
    }

    /**
     * Sets pay_run_status
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\PayRunStatus|null $pay_run_status pay_run_status
     *
     * @return $this
     */
    public function setPayRunStatus($pay_run_status)
    {

        $this->container['pay_run_status'] = $pay_run_status;

        return $this;
    }



    /**
     * Gets payment_date
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }
    public function getPaymentDateAsDate()
    {
      if ($this->getPaymentDate() != null) {
        return StringUtil::convertStringToDate($this->getPaymentDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets payment_date
     *
     * @param string|null $payment_date Payment Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {

        $this->container['payment_date'] = $payment_date;

        return $this;
    }
    /**
     * Sets payment_date
     *
     * @param \DateTime |null $payment_date Payment Date for the PayRun (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPaymentDateAsDate($payment_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($payment_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($payment_date->format('Y-m-d')." UTC") * 1000;
        $payment_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['payment_date'] = $payment_date;
      return $this;
    }



    /**
     * Gets payslip_message
     *
     * @return string|null
     */
    public function getPayslipMessage()
    {
        return $this->container['payslip_message'];
    }

    /**
     * Sets payslip_message
     *
     * @param string|null $payslip_message Payslip message for the PayRun
     *
     * @return $this
     */
    public function setPayslipMessage($payslip_message)
    {

        $this->container['payslip_message'] = $payslip_message;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets payslips
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\PayslipSummary[]|null
     */
    public function getPayslips()
    {
        return $this->container['payslips'];
    }

    /**
     * Sets payslips
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\PayslipSummary[]|null $payslips The payslips in the payrun
     *
     * @return $this
     */
    public function setPayslips($payslips)
    {

        $this->container['payslips'] = $payslips;

        return $this;
    }



    /**
     * Gets wages
     *
     * @return double|null
     */
    public function getWages()
    {
        return $this->container['wages'];
    }

    /**
     * Sets wages
     *
     * @param double|null $wages The total Wages for the Payrun
     *
     * @return $this
     */
    public function setWages($wages)
    {

        $this->container['wages'] = $wages;

        return $this;
    }



    /**
     * Gets deductions
     *
     * @return double|null
     */
    public function getDeductions()
    {
        return $this->container['deductions'];
    }

    /**
     * Sets deductions
     *
     * @param double|null $deductions The total Deductions for the Payrun
     *
     * @return $this
     */
    public function setDeductions($deductions)
    {

        $this->container['deductions'] = $deductions;

        return $this;
    }



    /**
     * Gets tax
     *
     * @return double|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double|null $tax The total Tax for the Payrun
     *
     * @return $this
     */
    public function setTax($tax)
    {

        $this->container['tax'] = $tax;

        return $this;
    }



    /**
     * Gets super
     *
     * @return double|null
     */
    public function getSuper()
    {
        return $this->container['super'];
    }

    /**
     * Sets super
     *
     * @param double|null $super The total Super for the Payrun
     *
     * @return $this
     */
    public function setSuper($super)
    {

        $this->container['super'] = $super;

        return $this;
    }



    /**
     * Gets reimbursement
     *
     * @return double|null
     */
    public function getReimbursement()
    {
        return $this->container['reimbursement'];
    }

    /**
     * Sets reimbursement
     *
     * @param double|null $reimbursement The total Reimbursements for the Payrun
     *
     * @return $this
     */
    public function setReimbursement($reimbursement)
    {

        $this->container['reimbursement'] = $reimbursement;

        return $this;
    }



    /**
     * Gets net_pay
     *
     * @return double|null
     */
    public function getNetPay()
    {
        return $this->container['net_pay'];
    }

    /**
     * Sets net_pay
     *
     * @param double|null $net_pay The total NetPay for the Payrun
     *
     * @return $this
     */
    public function setNetPay($net_pay)
    {

        $this->container['net_pay'] = $net_pay;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


