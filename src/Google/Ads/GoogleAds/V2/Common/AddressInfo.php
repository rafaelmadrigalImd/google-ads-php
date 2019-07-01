<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Address for proximity criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.AddressInfo</code>
 */
final class AddressInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Postal code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 1;</code>
     */
    private $postal_code = null;
    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_code = 2;</code>
     */
    private $province_code = null;
    /**
     * Country code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     */
    private $country_code = null;
    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_name = 4;</code>
     */
    private $province_name = null;
    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address = 5;</code>
     */
    private $street_address = null;
    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address2 = 6;</code>
     */
    private $street_address2 = null;
    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_name = 7;</code>
     */
    private $city_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $postal_code
     *           Postal code.
     *     @type \Google\Protobuf\StringValue $province_code
     *           Province or state code.
     *     @type \Google\Protobuf\StringValue $country_code
     *           Country code.
     *     @type \Google\Protobuf\StringValue $province_name
     *           Province or state name.
     *     @type \Google\Protobuf\StringValue $street_address
     *           Street address line 1.
     *     @type \Google\Protobuf\StringValue $street_address2
     *           Street address line 2. This field is write-only. It is only used for
     *           calculating the longitude and latitude of an address when geo_point is
     *           empty.
     *     @type \Google\Protobuf\StringValue $city_name
     *           Name of the city.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Postal code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Returns the unboxed value from <code>getPostalCode()</code>

     * Postal code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 1;</code>
     * @return string|null
     */
    public function getPostalCodeUnwrapped()
    {
        $wrapper = $this->getPostalCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Postal code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Postal code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue postal_code = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPostalCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPostalCode($wrappedVar);
    }

    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProvinceCode()
    {
        return $this->province_code;
    }

    /**
     * Returns the unboxed value from <code>getProvinceCode()</code>

     * Province or state code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_code = 2;</code>
     * @return string|null
     */
    public function getProvinceCodeUnwrapped()
    {
        $wrapper = $this->getProvinceCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Province or state code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProvinceCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->province_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Province or state code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setProvinceCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setProvinceCode($wrappedVar);
    }

    /**
     * Country code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Returns the unboxed value from <code>getCountryCode()</code>

     * Country code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     * @return string|null
     */
    public function getCountryCodeUnwrapped()
    {
        $wrapper = $this->getCountryCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Country code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Country code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCodeUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCountryCode($wrappedVar);
    }

    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProvinceName()
    {
        return $this->province_name;
    }

    /**
     * Returns the unboxed value from <code>getProvinceName()</code>

     * Province or state name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_name = 4;</code>
     * @return string|null
     */
    public function getProvinceNameUnwrapped()
    {
        $wrapper = $this->getProvinceName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Province or state name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProvinceName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->province_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Province or state name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue province_name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setProvinceNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setProvinceName($wrappedVar);
    }

    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * Returns the unboxed value from <code>getStreetAddress()</code>

     * Street address line 1.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address = 5;</code>
     * @return string|null
     */
    public function getStreetAddressUnwrapped()
    {
        $wrapper = $this->getStreetAddress();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Street address line 1.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStreetAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->street_address = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Street address line 1.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStreetAddressUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setStreetAddress($wrappedVar);
    }

    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address2 = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStreetAddress2()
    {
        return $this->street_address2;
    }

    /**
     * Returns the unboxed value from <code>getStreetAddress2()</code>

     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address2 = 6;</code>
     * @return string|null
     */
    public function getStreetAddress2Unwrapped()
    {
        $wrapper = $this->getStreetAddress2();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address2 = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStreetAddress2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->street_address2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Street address line 2. This field is write-only. It is only used for
     * calculating the longitude and latitude of an address when geo_point is
     * empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue street_address2 = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStreetAddress2Unwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setStreetAddress2($wrappedVar);
    }

    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_name = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * Returns the unboxed value from <code>getCityName()</code>

     * Name of the city.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_name = 7;</code>
     * @return string|null
     */
    public function getCityNameUnwrapped()
    {
        $wrapper = $this->getCityName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Name of the city.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_name = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCityName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Name of the city.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city_name = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityNameUnwrapped($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCityName($wrappedVar);
    }

}

