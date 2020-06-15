<?php
/**
 * CurrencyCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.2.1
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * CurrencyCode Class Doc Comment
 *
 * @category Class
 * @description 3 letter alpha code for the currency – see list of currency codes
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CurrencyCode
{
    /**
     * Possible values of this enum
     */
    const AED = 'AED';
    const AFN = 'AFN';
    const ALL = 'ALL';
    const AMD = 'AMD';
    const ANG = 'ANG';
    const AOA = 'AOA';
    const ARS = 'ARS';
    const AUD = 'AUD';
    const AWG = 'AWG';
    const AZN = 'AZN';
    const BAM = 'BAM';
    const BBD = 'BBD';
    const BDT = 'BDT';
    const BGN = 'BGN';
    const BHD = 'BHD';
    const BIF = 'BIF';
    const BMD = 'BMD';
    const BND = 'BND';
    const BOB = 'BOB';
    const BRL = 'BRL';
    const BSD = 'BSD';
    const BTN = 'BTN';
    const BWP = 'BWP';
    const BYN = 'BYN';
    const BZD = 'BZD';
    const CAD = 'CAD';
    const CDF = 'CDF';
    const CHF = 'CHF';
    const CLP = 'CLP';
    const CNY = 'CNY';
    const COP = 'COP';
    const CRC = 'CRC';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const CVE = 'CVE';
    const CZK = 'CZK';
    const DJF = 'DJF';
    const DKK = 'DKK';
    const DOP = 'DOP';
    const DZD = 'DZD';
    const EGP = 'EGP';
    const ERN = 'ERN';
    const ETB = 'ETB';
    const EUR = 'EUR';
    const FJD = 'FJD';
    const FKP = 'FKP';
    const GBP = 'GBP';
    const GEL = 'GEL';
    const GGP = 'GGP';
    const GHS = 'GHS';
    const GIP = 'GIP';
    const GMD = 'GMD';
    const GNF = 'GNF';
    const GTQ = 'GTQ';
    const GYD = 'GYD';
    const HKD = 'HKD';
    const HNL = 'HNL';
    const HRK = 'HRK';
    const HTG = 'HTG';
    const HUF = 'HUF';
    const IDR = 'IDR';
    const ILS = 'ILS';
    const IMP = 'IMP';
    const INR = 'INR';
    const IQD = 'IQD';
    const IRR = 'IRR';
    const ISK = 'ISK';
    const JEP = 'JEP';
    const JMD = 'JMD';
    const JOD = 'JOD';
    const JPY = 'JPY';
    const KES = 'KES';
    const KGS = 'KGS';
    const KHR = 'KHR';
    const KMF = 'KMF';
    const KPW = 'KPW';
    const KRW = 'KRW';
    const KWD = 'KWD';
    const KYD = 'KYD';
    const KZT = 'KZT';
    const LAK = 'LAK';
    const LBP = 'LBP';
    const LKR = 'LKR';
    const LRD = 'LRD';
    const LSL = 'LSL';
    const LYD = 'LYD';
    const MAD = 'MAD';
    const MDL = 'MDL';
    const MGA = 'MGA';
    const MKD = 'MKD';
    const MMK = 'MMK';
    const MNT = 'MNT';
    const MOP = 'MOP';
    const MRU = 'MRU';
    const MUR = 'MUR';
    const MVR = 'MVR';
    const MWK = 'MWK';
    const MXN = 'MXN';
    const MYR = 'MYR';
    const MZN = 'MZN';
    const NAD = 'NAD';
    const NGN = 'NGN';
    const NIO = 'NIO';
    const NOK = 'NOK';
    const NPR = 'NPR';
    const NZD = 'NZD';
    const OMR = 'OMR';
    const PAB = 'PAB';
    const PEN = 'PEN';
    const PGK = 'PGK';
    const PHP = 'PHP';
    const PKR = 'PKR';
    const PLN = 'PLN';
    const PYG = 'PYG';
    const QAR = 'QAR';
    const RON = 'RON';
    const RSD = 'RSD';
    const RUB = 'RUB';
    const RWF = 'RWF';
    const SAR = 'SAR';
    const SBD = 'SBD';
    const SCR = 'SCR';
    const SDG = 'SDG';
    const SEK = 'SEK';
    const SGD = 'SGD';
    const SHP = 'SHP';
    const SLL = 'SLL';
    const SOS = 'SOS';
    const SPL = 'SPL';
    const SRD = 'SRD';
    const STN = 'STN';
    const SVC = 'SVC';
    const SYP = 'SYP';
    const SZL = 'SZL';
    const THB = 'THB';
    const TJS = 'TJS';
    const TMT = 'TMT';
    const TND = 'TND';
    const TOP = 'TOP';
    const _TRY = 'TRY';
    const TTD = 'TTD';
    const TVD = 'TVD';
    const TWD = 'TWD';
    const TZS = 'TZS';
    const UAH = 'UAH';
    const UGX = 'UGX';
    const USD = 'USD';
    const UYU = 'UYU';
    const UZS = 'UZS';
    const VEF = 'VEF';
    const VND = 'VND';
    const VUV = 'VUV';
    const WST = 'WST';
    const XAF = 'XAF';
    const XCD = 'XCD';
    const XDR = 'XDR';
    const XOF = 'XOF';
    const XPF = 'XPF';
    const YER = 'YER';
    const ZAR = 'ZAR';
    const ZMW = 'ZMW';
    const ZMK = 'ZMK';
    const ZWD = 'ZWD';
    const _EMPTY = '';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AED,
            self::AFN,
            self::ALL,
            self::AMD,
            self::ANG,
            self::AOA,
            self::ARS,
            self::AUD,
            self::AWG,
            self::AZN,
            self::BAM,
            self::BBD,
            self::BDT,
            self::BGN,
            self::BHD,
            self::BIF,
            self::BMD,
            self::BND,
            self::BOB,
            self::BRL,
            self::BSD,
            self::BTN,
            self::BWP,
            self::BYN,
            self::BZD,
            self::CAD,
            self::CDF,
            self::CHF,
            self::CLP,
            self::CNY,
            self::COP,
            self::CRC,
            self::CUC,
            self::CUP,
            self::CVE,
            self::CZK,
            self::DJF,
            self::DKK,
            self::DOP,
            self::DZD,
            self::EGP,
            self::ERN,
            self::ETB,
            self::EUR,
            self::FJD,
            self::FKP,
            self::GBP,
            self::GEL,
            self::GGP,
            self::GHS,
            self::GIP,
            self::GMD,
            self::GNF,
            self::GTQ,
            self::GYD,
            self::HKD,
            self::HNL,
            self::HRK,
            self::HTG,
            self::HUF,
            self::IDR,
            self::ILS,
            self::IMP,
            self::INR,
            self::IQD,
            self::IRR,
            self::ISK,
            self::JEP,
            self::JMD,
            self::JOD,
            self::JPY,
            self::KES,
            self::KGS,
            self::KHR,
            self::KMF,
            self::KPW,
            self::KRW,
            self::KWD,
            self::KYD,
            self::KZT,
            self::LAK,
            self::LBP,
            self::LKR,
            self::LRD,
            self::LSL,
            self::LYD,
            self::MAD,
            self::MDL,
            self::MGA,
            self::MKD,
            self::MMK,
            self::MNT,
            self::MOP,
            self::MRU,
            self::MUR,
            self::MVR,
            self::MWK,
            self::MXN,
            self::MYR,
            self::MZN,
            self::NAD,
            self::NGN,
            self::NIO,
            self::NOK,
            self::NPR,
            self::NZD,
            self::OMR,
            self::PAB,
            self::PEN,
            self::PGK,
            self::PHP,
            self::PKR,
            self::PLN,
            self::PYG,
            self::QAR,
            self::RON,
            self::RSD,
            self::RUB,
            self::RWF,
            self::SAR,
            self::SBD,
            self::SCR,
            self::SDG,
            self::SEK,
            self::SGD,
            self::SHP,
            self::SLL,
            self::SOS,
            self::SPL,
            self::SRD,
            self::STN,
            self::SVC,
            self::SYP,
            self::SZL,
            self::THB,
            self::TJS,
            self::TMT,
            self::TND,
            self::TOP,
            self::_TRY,
            self::TTD,
            self::TVD,
            self::TWD,
            self::TZS,
            self::UAH,
            self::UGX,
            self::USD,
            self::UYU,
            self::UZS,
            self::VEF,
            self::VND,
            self::VUV,
            self::WST,
            self::XAF,
            self::XCD,
            self::XDR,
            self::XOF,
            self::XPF,
            self::YER,
            self::ZAR,
            self::ZMW,
            self::ZMK,
            self::ZWD,
            self::_EMPTY,
        ];
    }
}


